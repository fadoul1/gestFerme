<div class="">
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card pull-up shadow bg-gradient-success">
                <div class="card-content">
                    <a href="admin/produit/liste">
                        <div class="card-body">
                            <img src="public/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h4 class="text-white">Produits</h4>
                                    <h2 class="text-white mb-0"><?= $maxP->nbre ?></h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fe fe-grid text-white font-large-2 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="card pull-up shadow bg-gradient-primary">
                <div class="card-content">
                    <a href="admin/equipement/list">
                        <div class="card-body">
                            <img src="public/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h4 class="text-white">Equipements</h4>
                                    <h2 class="text-white mb-0"><?= $maxE->nbre ?></h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fe fe-truck text-white font-large-2 float-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4">
            <div class="card pull-up shadow bg-gradient-danger">
                <div class="card-content">
                    <a href="admin/employe/liste">
                        <div class="card-body">
                            <img src="public/admin/assets/img/circle.svg" class="card-img-absolute" alt="circle-image">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h4 class="text-white">Employés</h4>
                                    <h2 class="text-white mb-0"><?= $maxEm->nbre ?></h2>
                                </div>
                                <div class="align-self-center">
                                    <i class="fe fe-users success font-large-2 text-white float-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent border-0">
                <h2 class=" mb-0">Liste des derniers produits</h2>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap align-items-center">
                                <thead class="thead-light">
                                    <tr style="text-align: center">
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Prod. Annuel</th>
                                        <th>Prod. Mensuel</th>
                                        <th>Type</th>
                                        <th>Ajouter Par</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produits as $prod) : ?>
                                        <tr style="text-align: center">
                                            <td><a href="public/photos/produits/<?= $prod->image ?>"><img src="public/photos/produits/<?= $prod->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
                                            <td class="text-sm font-weight-600"><?= $prod->nom ?></td>
                                            <td><?= $prod->production_annuel ?></td>
                                            <td><?= $prod->production_mensuel ?></td>
                                            <td><?= $prod->type ?></td>
                                            <td>
                                                <?php
                                                $admin1 = new App\Controller\AdminsController();
                                                echo $admin1->Admin($prod->id_administrateur);
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= $prod->id_produit ?>" data-toggle="modal" data-target="#modal<?= $prod->id_produit . "a" ?>" class="btn btn-icon btn-primary btn-sm" >
                                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                                </a>

                                                <div class="modal fade" id="modal<?= $prod->id_produit . "a" ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                        <div class="modal-content">
                                                            <div class="card shadow">
                                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="public/photos/produits/<?= $prod->image ?>" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h4 class="card-title"><?= $prod->nom ?></h4>
                                                                    <p class="card-text">Production mensuel : <?= $prod->production_mensuel ?></p>
                                                                    <p class="card-text">Production annuelle : <?= $prod->production_annuel ?></p>
                                                                    <p class="card-text">Type de production : <?= $prod->type ?></p>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="admin/produit/edit/<?= $prod->id_produit ?>" class="btn btn-icon  btn-success btn-sm">
                                                    <span class="btn-inner--icon"><i class="fe fe-edit"></i></span>
                                                </a>
                                                <a href="javascript:" rel="<?= $prod->id_produit ?>" class="btn btn-icon btn-danger btn-sm sup">
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
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent border-0">
                <h2 class=" mb-0">Liste des derniers Equipements</h2>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Nom</th>
                                        <th>Prix d'achat</th>
                                        <th>Date d'achat</th>
                                        <th>Ajouter par</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>                                    
                                    <?php foreach ($equipements as $equi) : ?>
                                        <tr>
                                            <td><a href="public/photos/equipements/<?= $equi->image ?>"><img src="public/photos/equipements/<?= $equi->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
                                            <td class="text-sm font-weight-600"><?= $equi->nom ?></td>
                                            <td><?= $equi->prix ?></td>
                                            <td><?= $equi->date_achat ?></td>
                                            <td>
                                                <?php
                                                $admin1 = new App\Controller\AdminsController();
                                                echo $admin1->Admin($equi->id_administrateur);
                                                ?>
                                            </td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#modal<?= $equi->id_equipement . "b" ?>" class="btn btn-icon btn-primary btn-sm" >
                                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                                </a>

                                                <div class="modal fade" id="modal<?= $equi->id_equipement . "b" ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                        <div class="modal-content">
                                                            <div class="card shadow">
                                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="public/photos/equipements/<?= $equi->image ?>" alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h4 class="card-title"><?= $equi->nom ?></h4>
                                                                    <p class="card-text">Prix : <?= $equi->prix ?> cfa</p>
                                                                    <p class="card-text"> Date d'achat: <?= $equi->date_achat ?></p>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a href="admin/equipement/edit/<?= $equi->id_equipement ?>" class="btn btn-icon  btn-success btn-sm">
                                                    <span class="btn-inner--icon"><i class="fe fe-edit"></i></span>
                                                </a>
                                                <a href="javascript:" rel="<?= $equi->id_equipement ?>" class="btn btn-icon btn-danger btn-sm supb">
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
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent border-0">
                <h2 class=" mb-0">Liste des derniers Employés</h2>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap align-items-center">
                                <thead class="thead-light">
                                    <tr>
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
                                            <td><a href="public/photos/employes/<?= $employe->image ?>"><img src="public/photos/employes/<?= $employe->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
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
                                                <a href="<?= $employe->id_employe ?>" data-toggle="modal" data-target="#modal<?= $employe->id_employe ?>" class="btn btn-icon btn-primary btn-sm" >
                                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                                </a>

                                                <div class="modal fade" id="modal<?= $employe->id_employe ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                                        <div class="modal-content">
                                                            <div class="card shadow">
                                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="public/photos/employes/<?= $employe->image ?>" alt="Card image cap">
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

                                                <a href="admin/employe/edit/<?= $employe->id_employe ?>" class="btn btn-icon  btn-success btn-sm">
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
            </div>
        </div>
    </div>
</div>

