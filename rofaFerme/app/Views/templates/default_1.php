<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>rofaFerme | Equipements</title>
        <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/assets/css/user.css">
     <link rel="stylesheet" href="public/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
        
    </head>

    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <a class="nav-brand nav-link" href="./" style="font-size : 250%; font-family: bold; font-weight:  bold; color: #ffffff">rofaFerme </a>
                    </div>
                </div>
            </nav>
        </header>
        <ul class="nav nav-pills categories" style="font-size : 150%; margin-left: 40%">
            <li><a href="./">Accueil</a></li>
            <li><a href="produits">Produits </a></li>
            <li class="active"><a href="equipements">Equipements </a></li>
            <li><a href="apropos">A Propos</a></li>
        </ul>
        <div class="container post">
            <div class="row">
                <?= $content; ?>
            </div>
        </div>
        <footer>
            <h2>Binôme N°1(OURO AGORO Fad, DEFLY Akoko Rose) © Esiba 2019</h2></footer>
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>