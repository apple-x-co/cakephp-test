<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/11/01
 * Time: 7:25
 */

namespace TEAW;

use App\Form\HelloForm;

class HelloFormController extends  SimpleFormController {

    public function createForm() {
        return new HelloForm();
    }

}

//namespace App\Controller;
//
//use App\Form\HelloForm;
//
//class HelloFormController extends  AppController {
//
//    public function index() {
//
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
//
//    }
//
//}
