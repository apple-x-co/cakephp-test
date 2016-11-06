<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/11/01
 * Time: 7:25
 */

namespace App\Controller;

use Cake\Mailer\Email;

use App\Form\HelloForm;

use Bdyng\Cake\SimpleFormController;

class HelloFormController extends SimpleFormController {

    public function createForm()
    {
        return new HelloForm();
    }

    public function register($form)
    {
        $email = new Email('default');
        $email->from(['heroku.x.co@gmail.com' => 'CakePHP TEST'])
            ->to('apple.x.co@gmail.com  ')
            ->subject('Hello Form')
            ->send('Hello !!');

        return $this::RETURN_CONTINUE;
    }

}
