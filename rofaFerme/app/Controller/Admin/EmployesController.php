<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Admin;

/**
 * Description of EmployesController
 *
 * @author fad
 */
class EmployesController extends AppController {

    function __construct() {
        parent::__construct();
        $this->loadModel('Employe');
    }

    public function index($slug = null) {
        $action = $slug;
        $employes = $this->Employe->all();

        $this->render('admin.employes.index', compact('employes', 'action'), 'admin/tables');
    }

    public function create() {
        $result = null;
        $error = false;

        if (!empty($_POST)) {

            $image = $_FILES['image'];

            $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
            $name1 = time();
            $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
            $name1 = "public/photos/employes/" . str_replace(' ', '', $name1) . "." . $extension_upload;
            move_uploaded_file($image['tmp_name'], $name1);

            $result = $this->Employe->create([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'telephone' => $_POST['telephone'],
                'mail' => $_POST['mail'],
                'adresse' => $_POST['adresse'],
                'image' => $nomimage,
                'id_administrateur' => $_SESSION['auth']
            ]);


            $this->index("ajout");

            if (!$result) {
                $error = 'true';
            }
        } else {
            $this->render('admin.employes.add', compact('result', 'error'), 'admin/default_1');
        }
    }

    public function delete($id) {

        $delete = $this->Employe->delete($id);

        header('Location: ../../employe/liste');
    }

    public function edit($id) {
        $employe = $this->Employe->find($id);

        $result = false;

        if (!empty($_POST)) {
            if (@$_POST['choix'] != 1) {
                $result = $this->Employe->update($id, [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'telephone' => $_POST['telephone'],
                    'mail' => $_POST['mail'],
                    'adresse' => $_POST['adresse']
                ]);
            } elseif ($_POST['choix']) {

                $image = $_FILES['image'];

                $extension_upload = strtolower(substr(strrchr($image['name'], '.'), 1));
                $name1 = time();
                $nomimage = str_replace(' ', '', $name1) . "." . $extension_upload;
                $name1 = "public/photos/employes/" . str_replace(' ', '', $name1) . "." . $extension_upload;
                move_uploaded_file($image['tmp_name'], $name1);


                $result = $this->Employe->update($id, [
                    'nom' => $_POST['nom'],
                    'prenom' => $_POST['prenom'],
                    'telephone' => $_POST['telephone'],
                    'mail' => $_POST['mail'],
                    'adresse' => $_POST['adresse'],
                    'image' => $nomimage
                ]);
            }
        }
        $this->render('admin.employes.edit', compact('result', 'employe'), 'admin/default_2');
    }

}
