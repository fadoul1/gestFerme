<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Nouvel Equipement</h2>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Date d'achat</label>
                        <input class="form-control" placeholder="Selectionner la date" name="date_achat" type="date" required>
                    </div>

                </div>
                <div class="col-md-6">
                   
                    <div class="form-group">
                        <label class="form-label">Prix</label>
                        <input type="number" class="form-control" name="prix" placeholder="Ex: 100000">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Photo de l'équipement</label>
                        <input type="file" class="dropify" data-height="100" name="image" />
                    </div>

                </div>
                <button type="submit" class="mt-2 btn btn-block btn-primary mt-1 mb-1">Ajouter</button>
            </div>
        </form>

    </div>
</div> 


