<?php if ($result) : ?>
    <div class="alert alert-primary alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--text"><strong>Succes!</strong> Employé Modifier</span>
        <a href="../../employe/liste" class="btn btn-primary btn-sm" style="margin-left: 65%">
                liste des employés
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
                        <input type="text" class="form-control" name="nom" value="<?= ucwords($employe->nom )?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Mail</label>
                        <input type="email" class="form-control" name="mail" value="<?= $employe->mail ?>">
                    </div>

                     <div class="form-group">
                        <label class="form-label">Adresse de l'employé</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="adresse">
                            <?= $employe->adresse ?>
                        </textarea>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" value="<?= $employe->prenom ?>" required>
                    </div>
                   <div class="form-group">
                        <label class="form-label">Téléphone</label>
                        <input type="number" class="form-control"  name="telephone" required value="<?= $employe->telephone ?>">
                    </div>
                    
                    <div class="form-group" style="text-align: center">
                        <input class="custom-control-input" id="customCheck1" type="checkbox" name="choix" value="1">
                        <label class="custom-control-label" for="customCheck1">Modifier l'image</label>
                    </div>
                    
                    <div class="form-group">
                        <input type="file" name="image" class="dropify" data-default-file="../../../public/photos/employes/<?= $employe->image ?>" data-height="150"/>
                    </div>
                </div>

                <button type="submit" class="mt-2 btn btn-block btn-success mt-1 mb-1">Modifier</button>

            </div>
        </form>

    </div>
</div> 


