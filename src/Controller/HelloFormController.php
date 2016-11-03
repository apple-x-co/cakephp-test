<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/11/01
 * Time: 7:25
 */

namespace App\Controller;

use Bdyng\Cake\SimpleFormController;
use App\Form\HelloForm;

class HelloFormController extends SimpleFormController {

    public function createForm() {
        return new HelloForm();
    }

}
