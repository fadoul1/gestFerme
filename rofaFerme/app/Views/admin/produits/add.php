<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Nouveau Produit</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nom de produit</label>
                        <input type="text" class="form-control" name="nom" placeholder="Ex: Maïs">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Production annuelle</label>
                        <input type="text" class="form-control" name="production_annuel" placeholder="Ex: 100 tone">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Production mensuel</label>
                        <input type="text" class="form-control" name="production_mensuel" placeholder="Ex: 100 kg">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Type du produit</label>
                        <select class="form-control select2 w-100" name="type">
                            <option selected="selected">Choisir le type</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Elevage">Elevage</option>    
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" class="dropify" data-height="170" name="image" />
                    </div>

                </div>
                <button type="submit" class="mt-2 btn btn-block btn-primary mt-1 mb-1">Ajouter</button>
            </div>
        </form>

    </div>
</div> 


