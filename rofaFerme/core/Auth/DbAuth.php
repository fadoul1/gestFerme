<?php

namespace Core\Auth;

use Core\Database\Database;

/**
 * Description of DbAuth
 *
 * @author fad
 */
class DbAuth {

    private $db;

    public function __construct(Database $db) {
        $this->db = $db;
    }

    public function login($nom, $passe) {
        $user = $this->db->prepare('SELECT * FROM administrateurs WHERE nom = ?', [$nom], null, true);
        if ($user) {
            if ($user->passe === sha1($passe)) {

                $_SESSION['auth'] = $user->id_administrateur;
                 $_SESSION['nom'] = $user->nom;

                return true;
            }
            return false;
        }
    }

    public function logged() {
        return isset($_SESSION['auth']);
    }

    public function getUserId() {
        
        if ($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

}
