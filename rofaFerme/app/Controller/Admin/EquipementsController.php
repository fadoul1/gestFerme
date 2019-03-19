<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;

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

    public function index($slug = null) {
        $action = $slug;
        $equipements = $this->Equipement->all();

        $this->render('admin.equipements.index', compact('equipements', 'action'), 'admin/tables');
    }

    public function create() {
        $result = null;
        $error = false;

        if (!empty($_POST)) {

            $image = $_FILES['image'];

            $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
            $name1 = time();
            $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
            $name1 = "public/photos/equipements/" . str_replace(' ', '', $name1) . "." . $extension_upload;
            move_uploaded_file($image['tmp_name'], $name1);

            $result = $this->Equipement->create([
                'nom' => $_POST['nom'],
                'prix' => $_POST['prix'],
                'date_achat' => $_POST['date_achat'],
                'image' => $nomimage,
                'id_administrateur' => $_SESSION['auth']
            ]);

            $this->index("ajout");

            if (!$result) {
                $error = 'true';
            }
        } else {
            $this->render('admin.equipements.add', compact('result', 'error'), 'admin/default_1');
        }

        
    }

    public function delete($id) {

        $delete = $this->Equipement->delete($id);

        header('Location: ../../equipement/list');
    }

    public function edit($id) {
        $equipement = $this->Equipement->find($id);

        $result = false;
        if (!empty($_POST)) {

            if (@$_POST['choix'] != 1) {
                $result = $this->Equipement->update($id, [
                    'nom' => $_POST['nom'],
                    'prix' => $_POST['prix'],
                    'date_achat' => $_POST['date_achat']
                ]);
            } elseif ($_POST['choix']) {

                $image = $_FILES['image'];

                $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
                $name1 = time();
                $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
                $name1 = "public/photos/equipements/" . str_replace(' ', '', $name1) . "." . $extension_upload;
                move_uploaded_file($image['tmp_name'], $name1);

                $result = $this->Equipement->update($id, [
                    'nom' => $_POST['nom'],
                    'prix' => $_POST['prix'],
                    'date_achat' => $_POST['date_achat'],
                    'image' => $nomimage
                ]);
            }
        }

        $this->render('admin.equipements.edit', compact('result', 'equipement'), 'admin/default_2');
    }

}
