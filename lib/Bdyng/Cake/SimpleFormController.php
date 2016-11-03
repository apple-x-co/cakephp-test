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

    public $form = null;

    abstract protected function createForm();

    public function index() {

//        $hello_form = new HelloForm();
//
//        if ($this->request->is('post')) {
//            if ($hello_form->execute($this->request->data)) {
//                $this->Flash->success('NOW!!');
//            }
//            else {
//                $this->Flash->error('ERROR!!');
//            }
//
//            $this->render('confirm');
//        }
//
//        $this->set('hello_form', $hello_form);

        $form = $this->createForm();
    }

    public function prepareForm($context, $form) {

    }
    public function initForm($context, $form) {

    }
    public function prepare($context, $form) {

    }
    public function prepareInput($context, $form) {

    }
    public function input($context, $form) {

    }
    public function prepareConfirm($context, $form) {

    }
    public function confirm($context, $form) {

    }
    public function register($context, $form) {

    }

}