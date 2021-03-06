<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/11/01
 * Time: 8:16
 */
namespace Bdyng\Cake;

use App\Controller\AppController;

abstract class SimpleFormController extends AppController {

    const MODE_INPUT = 'input';
    const MODE_CONFIRM = 'confirm';
    const MODE_REGISTER = 'register';
    const TEMPLATE_INPUT = 'input';
    const TEMPLATE_CONFIRM = 'confirm';
    const TEMPLATE_COMPLETE = 'complete';
    const RETURN_CONTINUE = '__continue';

    public $form = null;
    private $mode = null;

    abstract protected function createForm();

    public function index() {
        $mode = $this->request->param('__mode');
        if (!array_key_exists('__mode', $this->request->data)) {
            if (array_key_exists('__confirm', $this->request->data)) {
                $mode = static::MODE_CONFIRM;
            }
            elseif (array_key_exists('__register', $this->request->data)) {
                $mode = static::MODE_REGISTER;
            }
            else {
                $mode = static::MODE_INPUT;
            }
        }
        elseif ($mode !== static::MODE_INPUT &&
                $mode !== static::MODE_CONFIRM &&
                $mode !== static::MODE_REGISTER) {
            $mode = static::MODE_INPUT;
        }

        $form = $this->createForm();
        $this->prepareForm($form, $mode);

        $form_name = $this->getFormName();
        $this->set($form_name, $form);

        $return_val = $this->prepare($form);
        if ($return_val !== static::RETURN_CONTINUE) {
            $this->render($return_val);
            return;
        }

        if ($mode === static::MODE_CONFIRM ||
            $mode === static::MODE_REGISTER) {
            $return_val = $this->verifyRequestContext($form);
            if ($return_val !== static::RETURN_CONTINUE) {
                $this->render($return_val);
                return;
            }

            if ($form->execute($this->request->data) &&
                $this->validate($form)) {

                if ($mode === static::MODE_CONFIRM) {
                    $return_val = $this->prepareConfirm($form);
                    if ($return_val !== static::RETURN_CONTINUE) {
                        $this->render($return_val);
                        return;
                    }
                    $this->render(static::TEMPLATE_CONFIRM);
                    return;
                }

                $return_val = $this->register($form);
                if ($return_val !== static::RETURN_CONTINUE) {
                    $this->render($return_val);
                    return;
                }
                $this->redirect(['action' => 'complete']);
                return;
            }
        }
        elseif ($mode === static::MODE_INPUT &&
                $this->request->is('get')) {
            $return_val = $this->initForm($form);
            if ($return_val !== static::RETURN_CONTINUE) {
                $this->render($return_val);
                return;
            }
        }

        $return_val = $this->prepareInput($form);
        if ($return_val !== static::RETURN_CONTINUE) {
            $this->render($return_val);
            return;
        }

        $this->render(static::TEMPLATE_INPUT);
    }

    public function getFormName() {
        return 'form';
    }
    public function prepareForm($form, $mode) {

    }
    public function initForm($form) {
        return $this::RETURN_CONTINUE;
    }
    public function prepare($form) {
        return $this::RETURN_CONTINUE;
    }
    public function prepareInput($form) {
        return $this::RETURN_CONTINUE;
    }
    public function verifyRequestContext($form) {
        return $this::RETURN_CONTINUE;
    }
    public function validate($form) {
        return $this::RETURN_CONTINUE;
    }
    public function prepareConfirm($form) {
        return $this::RETURN_CONTINUE;
    }
    public function register($form) {
        return $this::RETURN_CONTINUE;
    }
    public function complete() {
    }

}