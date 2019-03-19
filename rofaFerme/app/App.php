<?php

use Core\Config;
use Core\Database\MysqlDataBase;

class App {

    public $titre = "Mon site";
    private static $_instance;
    private $db_instance;

    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }

        return self::$_instance;
    }

    public static function load() {
        session_start();
        require 'vendor/autoload.php';
    }

    public function getTable($name) {
        $class_name = '\\App\\Table\\' . ucfirst($name) . 'Table';

        return new $class_name($this->getDb());
    }

    public function getDb() {
        $config = Config::getInstance('config/config.php');
        if (is_null($this->db_instance)) {
            $this->db_instance = new MysqlDataBase($config->get('db_name'), $config->get('db_user'), $config->get('db_passe'), $config->get('db_host'));
        }
        return $this->db_instance;
    }
    
    public static function notFound() {
        header("HTTP/1.0 404 Not Found");
        header("Location : /error");
    }
}
