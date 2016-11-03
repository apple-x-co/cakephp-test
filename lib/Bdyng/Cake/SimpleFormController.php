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
        $this->set('form', $form);
    }

    public function prepareForm($form) {

    }
    public function initForm($form) {

    }
    public function prepare($form) {

    }
    public function prepareInput($form) {

    }
    public function input($form) {

    }
    public function prepareConfirm($form) {

    }
    public function confirm($form) {

    }
    public function register($form) {

    }

}