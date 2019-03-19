<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core\Controller;

/**
 * Description of Controller
 *
 * @author fad
 */
class Controller {

    protected $viewPath;
    protected $template;

    protected function render($view, $variables = [], $template_1 = null) {

        if ($template_1) {
            $this->template = $template_1;
        }  
        ob_start();
        
        extract($variables);
        
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        
        $content = ob_get_clean();

        require($this->viewPath . 'templates/' . $this->template . '.php');
    }

    protected function forbidden() {
        header('HTTP/1.0 403 Forbidden');
        die('acces interdit');
    }

    protected function notFound() {
        header('HTTP/1.0 404 Not Found');
        die('page introuvable');
    }

}
