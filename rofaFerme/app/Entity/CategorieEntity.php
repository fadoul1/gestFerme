<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;
use Core\Entity\Entity;

/**
 * Description of CategorieEntity
 *
 * @author fad
 */
class CategorieEntity extends Entity{

    public function getExtrait() {
        return $this->nom;
    }

}