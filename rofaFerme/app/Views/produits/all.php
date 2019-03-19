<?php foreach ($produits as $produit) : ?>
    <div class="col-lg-3 col-sm-6">
        <div class="card shadow">
            <a href="public/photos/produits/<?= $produit->image ?>"><img class="card-img-top img-fluid" style="max-height: 15em; min-height: 15em" src="public/photos/produits/<?= $produit->image ?>" alt="Card image cap"></a>
            <div class="card-body" style="font-size: 150%; ">
                <h4 class="card-title" style="text-align: center; font-weight: bold"><?= $produit->nom ?></h4>
                <p class="card-text">Production mensuel : <?= $produit->production_mensuel ?></p>
                <p class="card-text">Production annuel : <?= $produit->production_annuel ?></p>
            </div>
        </div>  
    </div>
<?php endforeach; ?>

