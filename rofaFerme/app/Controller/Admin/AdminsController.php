<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;

use \App;

/**
 * Description of AdminsController
 *
 * @author fad
 */
class AdminsController extends AppController {

    function __construct() {
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Employe');
        $this->loadModel('Equipement');
        $this->loadModel('Administrateur');
    }

    public function index() {
        $admins = $this->Administrateur->last();

        $produits = $this->Produit->last();
        $maxP = $this->Produit->total();

        $equipements = $this->Equipement->last();
        $maxE = $this->Equipement->total();

        $employes = $this->Employe->last();

        $maxEm = $this->Employe->total();

        $this->render('admin.admins.index', compact(
                        'maxEm', 'maxE', 'maxP', 'admins', 'produits', 'employes', 'equipements'
                ), 'admin/default');
    }

    public function create() {
        $result = null;
        $errors = false;

        if (!empty($_POST)) {
            if ($_POST['passe'] == $_POST['passe1']) {
                $result = $this->Administrateur->create([
                    'nom' => $_POST['nom'],
                    'passe' => sha1($_POST['passe'])
                ]);
            } else {
                $errors = true;
            }

            if ($result) {
                header('Location: ../admin');
            }
        }

        $this->render('admin.admins.add', compact('result', 'errors'), 'admin/login');
    }

    public function newPasseword() {
        $admin = $this->Administrateur->find($_SESSION['auth']);

        $result = null;
        $errors = false;

        if (!empty($_POST)) {
            if (sha1($_POST['passe']) == $admin['passe']) {
                $result = $this->Administrateur->update($_SESSION['auth'], [
                    'passe' => sha1($_POST['passe1'])
                ]);
            } else {
                $errors = true;
            }

            if ($result) {
                header('Location: ../admin');
            }
        }

        $this->render('admin.admins.edit', compact('result', 'errors', 'admin'), 'admin/login');
    }

    public function show($id) {
        $post = $this->Article->find($id);

        if (!$post) {
            $this->notFound();
        }

        $this->render('admin.admins.show', compact('post'), 'default_1');
    }

    public function getAdmin($id) {
        
    }

}
