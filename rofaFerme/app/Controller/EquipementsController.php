<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of EquipementsController
 *
 * @author fad
 */
class EquipementsController extends AppController {

    function __construct() {
        parent::__construct();
        $this->loadModel('Equipement');
    }

    public function index() {
        $equipements = $this->Equipement->all();
        $this->render('equipements.all', compact('equipements'), 'default_1');
    }
}    