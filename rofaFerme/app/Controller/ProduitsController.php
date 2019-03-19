<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

/**
 * Description of ProduitsController
 *
 * @author fad
 */
class ProduitsController  extends AppController {

    function __construct() {
        parent::__construct();
        $this->loadModel('Produit');
    }

    public function index() {
        $produits = $this->Produit->all();
        $this->render('produits.all', compact('produits'));
    }
}    