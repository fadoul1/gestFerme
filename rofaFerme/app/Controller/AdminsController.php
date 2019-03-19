<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

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

    public function login() {
        $errors = false;
        if (!empty($_POST)) {
            $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
            if ($auth->login($_POST['nom'], $_POST['passe'])) {
                header('Location: ../admin');
            } else {
                $errors = 'true';
            }
        }

        $this->render('users.login', compact('errors'), 'admin/login');
    }

    public function create() {
        $result = null;
        $error = false;

        if (!empty($_POST)) {
            $result = $this->Administrateur->create([
                'nom' => $_POST['nom'],
                'passe' => sha1($_POST['passe'])
            ]);

            if ($result) {
                header('Location: ../../admin');
            } else {
                $error = 'true';
            }
        }

        $this->render('admin.articles.add', compact('result', 'error'), 'admin/default_1');
    }

    public function delete() {

        $delete = $this->Administrateur->delete($id);

        header('Location: ../../../admin');
    }

    public function edit($id) {
        $post = $this->Article->find($id);

        $result = null;
        $error = false;

        if (!empty($_POST)) {
            $result = $this->Article->update($id, [
                'nom' => $_POST['nom'],
                'passe' => sha1($_POST['passe'])
            ]);

            if ($result) {
                header('Location: ../../../admin');
            } else {
                $error = 'true';
            }
        }

        $this->render('admin.admins.edit', compact('result', 'error', 'post', 'categories'), 'admin/default_2');
    }

    public function show($id) {
        $post = $this->Article->find($id);

        if (!$post) {
            $this->notFound();
        }

        $this->render('admin.admins.show', compact('post'), 'default_1');
    }

    public function admin($id) {
        $admins = $this->Administrateur->getAdmin($id);
        
        return $admins['nom'];
    }
    
    public function logout() {
        session_destroy();
        session_unset();
        
        header('Location: ../admin/login');       
    }

}
