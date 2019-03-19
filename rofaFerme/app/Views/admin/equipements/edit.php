<?php if ($result) : ?>
    <div class="alert alert-primary alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--text"><strong>Succes!</strong> Equipement Modifier</span>
        <a href="../../equipement/list" class="btn btn-primary btn-sm" style="margin-left: 62%">
                liste des équipements
        </a>
    </div>
    <br>
<?php endif; ?>
    <div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Modifier un Employé</h2>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" value="<?= ucwords($equipement->nom) ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date d'achat</label>
                        <input class="form-control" placeholder="Selectionner la date" name="date_achat" type="date" value="<?= $equipement->date_achat ?>" required>
                    </div>

                    <div class="form-group" style="text-align: center">
                        <input class="custom-control-input" id="customCheck1" type="checkbox" name="choix" value="1">
                        <label class="custom-control-label" for="customCheck1">Modifier l'image</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Prix</label>
                        <input type="text" class="form-control" name="prix" value="<?= $equipement->prix ?>" required>
                    </div>

                    <div class="form-group">
                        <input type="file" name="image" class="dropify" data-default-file="../../../public/photos/equipements/<?= $equipement->image ?>" data-height="150"/>
                    </div>
                </div>

                <button type="submit" class="mt-2 btn btn-block btn-success mt-1 mb-1">Modifier</button>

            </div>
        </form>

    </div>
</div> 


