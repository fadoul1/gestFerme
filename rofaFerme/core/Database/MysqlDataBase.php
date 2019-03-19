<?php

namespace Core\Database;

use \PDO;

/**
 * Description of DataBase
 *
 * @author fad
 */
class MysqlDataBase extends Database {

    private $db_name;
    private $db_user;
    private $db_passe;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'bi1', $db_passe = 'bi1', $db_host = 'localhost') {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_passe = $db_passe;
        $this->db_host = $db_host;
    }

    private function getPDO() {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=db_ferme;host=localhost', 'bi1', 'bi1');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }

        return $this->pdo;
    }

    public function query($statement, $classe_name = null, $one = false) {
        $req = $this->getPDO()->query($statement);

        if (
                strpos($statement, 'INSERT') === 0 ||
                strpos($statement, 'UPDATE') === 0 ||
                strpos($statement, 'DELETE') === 0
        ) {
            return $req;
        }

        if ($classe_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $classe_name);
        }
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }

        return $datas;
    }

    public function prepare($statement, $attributes, $classe_name = null, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $res = $req->execute($attributes);

        if (
                strpos($statement, 'INSERT') === 0 ||
                strpos($statement, 'UPDATE') === 0 ||
                strpos($statement, 'DELETE') === 0
        ) {
            return $res;
        }

        if ($classe_name === null) {
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $classe_name);
        }
        if ($one) {
            $datas = $req->fetch();
        } else {
            $datas = $req->fetchAll();
        }

        return $datas;
    }

}
