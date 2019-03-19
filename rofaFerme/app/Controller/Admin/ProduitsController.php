<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;

/**
 * Description of ProduitsController
 *
 * @author fad
 */
class ProduitsController extends AppController {

    function __construct() {
        parent::__construct();
        $this->loadModel('Produit');
    }

    public function index($slug = null) {
        $action = $slug;
        $produits = $this->Produit->all();
        $this->render('admin.produits.index', compact('produits', 'action'), 'admin/tables');
    }

    public function create() {
        $result = false;
        $error = false;

        if (!empty($_POST)) {
            $image = $_FILES['image'];

            $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
            $name1 = time();
            $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
            $name1 = "public/photos/produits/" . str_replace(' ', '', $name1) . "." . $extension_upload;
            move_uploaded_file($image['tmp_name'], $name1);

            $result = $this->Produit->create([
                'nom' => $_POST['nom'],
                'production_annuel' => $_POST['production_annuel'],
                'production_mensuel' => $_POST['production_mensuel'],
                'type' => $_POST['type'],
                'image' => $nomimage,
                'id_administrateur' => $_SESSION['auth']
            ]);

            $this->index("ajout");

            if (!$result) {
                $error = 'true';
            }
        } else {
            $this->render('admin.produits.add', compact('result', 'error'), 'admin/default_1');
        }
    }

    public function delete($id) {

        $delete = $this->Produit->delete($id);
        
        header('Location: ../../produit/liste');
    }

    public function edit($id) {
        $produit = $this->Produit->find($id);

        $result = false;

        if (!empty($_POST)) {
            if (@$_POST['choix'] != 1) {
                $result = $this->Produit->update($id, [
                    'nom' => $_POST['nom'],
                    'production_annuel' => $_POST['production_annuel'],
                    'production_mensuel' => $_POST['production_mensuel'],
                    'type' => $_POST['type']
                ]);
            } elseif ($_POST['choix']) {
                $image = $_FILES['image'];

                $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
                $name1 = time();
                $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
                $name1 = "public/photos/produits/" . str_replace(' ', '', $name1) . "." . $extension_upload;
                move_uploaded_file($image['tmp_name'], $name1);

                $result = $this->Produit->update($id, [
                    'nom' => $_POST['nom'],
                    'production_annuel' => $_POST['production_annuel'],
                    'production_mensuel' => $_POST['production_mensuel'],
                    'type' => $_POST['type'],
                    'image' => $nomimage,
                ]);
            }
        }
        $this->render('admin.produits.edit', compact('result', 'produit'), 'admin/default_2');
    }

}
