<div class="card shadow">
    <div class="card-header">
        <h2 class="mb-0">Nouvel Employé</h2>
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
                        <label class="form-label">Mail</label>
                        <input type="email" class="form-control" name="mail" placeholder="Ex: om@mail.com">
                    </div>

                     <div class="form-group">
                        <label class="form-label">Adresse de l'employé</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Adresse" name="adresse"></textarea>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                    </div>
                   <div class="form-group">
                        <label class="form-label">Téléphone</label>
                        <input type="number" class="form-control" name="telephone" required placeholder="Ex: 90 25 26 28">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Photo de l'employé</label>
                        <input type="file" class="dropify" data-height="100" name="image" />
                    </div>

                </div>
                <button type="submit" class="mt-2 btn btn-block btn-primary mt-1 mb-1">Ajouter</button>
            </div>
        </form>

    </div>
</div> 


