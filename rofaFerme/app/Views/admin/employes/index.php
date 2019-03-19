<?php if ($action == "ajout") : ?>
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
        <span class="alert-inner--text"><strong>Succes!</strong> Employé Ajouté</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <br>
<?php endif; ?>
<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Liste des Employés</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table card-table table-vcenter text-nowrap align-items-center">
                <thead>
                    <tr style="text-align: center">
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Tel</th>
                        <th>Mail</th>
                        <th>Embauché Le</th>
                        <th>Ajouter par</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employes as $employe) : ?>
                        <tr style="text-align: center">
                            <td><a href="../../public/photos/employes/<?= $employe->image ?>"><img src="../../public/photos/employes/<?= $employe->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
                            <td class="text-sm font-weight-600"><?= $employe->nom ?></td>
                            <td><?= $employe->prenom ?></td>
                            <td><?= $employe->adresse ?></td>
                            <td><?= $employe->telephone ?></td>
                            <td><?= $employe->mail ?></td>
                            <td><?= $employe->date_embauche ?></td>
                            <td>
                                <?php
                                $admin1 = new App\Controller\AdminsController();
                                echo $admin1->Admin($employe->id_administrateur);
                                ?>
                            </td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#modal<?= $employe->id_employe ?>" class="btn btn-icon btn-primary btn-sm" >
                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                </a>

                                <div class="modal fade" id="modal<?= $employe->id_employe ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="card shadow">
                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="../../public/photos/employes/<?= $employe->image ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?= $employe->nom . "  " . $employe->prenom ?></h4>
                                                    <p class="card-text">Téléphone : <?= $employe->telephone ?></p>
                                                    <p class="card-text"> e-mail: <?= $employe->mail ?></p>
                                                    <p class="card-text">Adresse: <?= $employe->adresse ?></p>
                                                    <p class="card-text">Date d'embauche: <?= $employe->date_embauche ?></p>

                                                </div>
                                                <div class="card-footer">
                                                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="edit/<?= $employe->id_employe ?>" class="btn btn-icon  btn-success btn-sm">
                                    <span class="btn-inner--icon"><i class="fe fe-edit"></i></span>
                                </a>
                                <a href="javascript:" rel="<?= $employe->id_employe ?>" class="btn btn-icon btn-danger btn-sm supa">
                                    <span class="btn-inner--icon"><i class="fe fe-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>