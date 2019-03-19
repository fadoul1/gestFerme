<?php if ($result) : ?>
    <div class="alert alert-primary alert-dismissible fade show mb-0" role="alert">
        <span class="alert-inner--text"><strong>Succes!</strong> Produit Modifier</span>
        <a href="../../produit/liste" class="btn btn-primary btn-sm" style="margin-left: 65%">
                liste des produits
        </a>
    </div>
    <br>
<?php endif; ?>
<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Modifier un Produit</h2>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nom de produit</label>
                        <input type="text" class="form-control" name="nom" placeholder="Name" required value="<?= $produit->nom ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Production annuelle</label>
                        <input type="text" class="form-control" name="production_annuel" required placeholder="Ex: 100 tone" value="<?= $produit->production_annuel ?>">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Production mensuel</label>
                        <input type="text" class="form-control" name="production_mensuel" required placeholder="Ex: 100 kg" value="<?= $produit->production_mensuel ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Type du produit</label>
                        <select class="form-control select2 w-100" name="type" required>
                            <option selected="selected" value="<?= $produit->type ?>"><?= $produit->type ?></option>
                            <option disabled selected>Choisir le type</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Elevage">Elevage</option>    
                        </select>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <input class="custom-control-input" id="customCheck1" type="checkbox" name="choix" value="1">
                        <label class="custom-control-label" for="customCheck1">Modifier l'image</label>
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="dropify" data-default-file="../../../public/photos/produits/<?= $produit->image ?>" data-height="150"/>
                    </div>
                </div>

                <button type="submit" class="mt-2 btn btn-block btn-success mt-1 mb-1">Modifier</button>

            </div>
        </form>

    </div>
</div> 


