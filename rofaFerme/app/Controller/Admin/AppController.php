<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;
use \App;
use Core\Auth\DbAuth;

/**
 * Description of AppController
 *
 * @author fad
 */
class AppController extends \App\Controller\AppController {

    public function __construct() {
        parent::__construct();

        $app = App::getInstance();

        $auth = new DbAuth($app->getDb());

        if (!$auth->logged()) {
            
            header('Location: ./admin/login');
        }
    }

}
