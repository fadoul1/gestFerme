
<?php foreach ($equipements as $equipement) : ?>

    <div class="col-lg-3 col-sm-6">
        <div class="card shadow">
            <a href="public/photos/equipements/<?= $equipement->image ?>"><img class="card-img-top img-fluid" style="max-height: 15em; min-height: 15em" src="public/photos/equipements/<?= $equipement->image ?>" alt="Card image cap"></a>
            <div class="card-body" style="font-size: 150%; ">
                <h4 class="card-title" style="text-align: center; font-weight: bold"><?= $equipement->nom ?></h4>
            </div>
        </div>  
    </div>

<?php endforeach; ?>



