<?php

namespace Core;

/**
 * Description of Config
 *
 * @author fad
 */
class Config {
    private $settings = [];
    private static $_instance;

    public static function getInstance($file) {
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);
        }
        
        return self::$_instance;
    }

    public function __construct($file) {
        $this->settings = require($file);
    }
    
    public function get($key) {
        if(!isset($this->settings[$key])){
            return NULL;
        }
        return $this->settings[$key];
    }
}
