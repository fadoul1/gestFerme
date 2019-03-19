<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use Core\Controller\Controller;
use \App;
use Core\Auth\DbAuth;

/**
 * Description of AppController
 *
 * @author fad
 */
class AppController extends Controller{
    protected $template = 'default';
    
    public function __construct() {
        $this->viewPath = 'app/Views/';
    }
    
    protected function loadModel($modelName) {
        $this->$modelName = App::getInstance()->getTable($modelName);
    }

}
