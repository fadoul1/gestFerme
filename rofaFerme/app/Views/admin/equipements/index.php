<?php if ($action == "ajout") : ?>
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
        <span class="alert-inner--text"><strong>Succes!</strong> Equipement Ajouté</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <br>
<?php endif; ?>
    <div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Liste des Equipements</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table card-table table-vcenter text-nowrap align-items-center">
                <thead>
                    <tr style="text-align: center">
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Date achat</th>
                        <th>Ajouter par</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($equipements as $equipement) : ?>
                        <tr style="text-align: center">
                            <td><a href="../../public/photos/equipements/<?= $equipement->image ?>"><img src="../../public/photos/equipements/<?= $equipement->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
                            <td class="text-sm font-weight-600"><?= $equipement->nom ?></td>
                            <td><?= $equipement->prix ?></td>
                            <td><?= $equipement->date_achat ?></td>
                            <td>
                                <?php
                                $admin1 = new App\Controller\AdminsController();
                                echo $admin1->Admin($equipement->id_administrateur);
                                ?>
                            </td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#modal<?= $equipement->id_equipement ?>" class="btn btn-icon btn-primary btn-sm" >
                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                </a>

                                <div class="modal fade" id="modal<?= $equipement->id_equipement ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="card shadow">
                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="../../public/photos/equipements/<?= $equipement->image ?>" alt="Card image cap">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?= $equipement->nom ?></h4>
                                                    <p class="card-text">Prix : <?= $equipement->prix ?></p>
                                                    <p class="card-text"> Date : <?= $equipement->date_achat ?></p>

                                                </div>
                                                <div class="card-footer">
                                                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="edit/<?= $equipement->id_equipement ?>" class="btn btn-icon  btn-success btn-sm">
                                    <span class="btn-inner--icon"><i class="fe fe-edit"></i></span>
                                </a>
                                <a href="javascript:" rel="<?= $equipement->id_equipement ?>" class="btn btn-icon btn-danger btn-sm supb">
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