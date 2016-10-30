<?php
/**
 * Created by PhpStorm.
 * User: kouhei
 * Date: 2016/10/30
 * Time: 18:09
 */

namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {

    public function index() {

        $this->set('hellow_world', 'HELLO');

    }


}