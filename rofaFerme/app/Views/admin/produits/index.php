<?php if ($action == "ajout") : ?>
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
        <span class="alert-inner--text"><strong>Succes!</strong> Produit Ajouté</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <br>
<?php endif; ?>
<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Liste des produits</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table card-table table-vcenter text-nowrap align-items-center">
                <thead>
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
                            <td><a href="../../public/photos/produits/<?= $prod->image ?>"><img src="../../public/photos/produits/<?= $prod->image ?>" style="min-width: 5em;max-width: 5em; max-height: 4em" class="img-fluid" alt="circle-image"></a></td>
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
                                <a href="<?= $prod->id_produit ?>" data-toggle="modal" data-target="#modal<?= $prod->id_produit ?>" class="btn btn-icon btn-primary btn-sm" >
                                    <span class="btn-inner--icon"><i class="fe fe-eye"></i></span>
                                </a>

                                <div class="modal fade" id="modal<?= $prod->id_produit ?>" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div style="max-width: 30em"  class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="card shadow">
                                                <img class="card-img-top img-fluid" style="max-height: 20em; min-height: 20em" src="../../public/photos/produits/<?= $prod->image ?>" alt="Card image cap">
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

                                <a href="edit/<?= $prod->id_produit ?>" class="btn btn-icon  btn-success btn-sm">
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