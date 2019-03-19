<form method="post" class="login100-form validate-form">
    <span class="login100-form-title">
        Connexion
    </span>
    <?php if ($errors): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
            <span class="alert-inner--text"><strong>Echec!</strong> Combinaison incorrect ! </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <br>
    <?php endif; ?>
    <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="nom" placeholder="Nom d'utilisateur" required>
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="passe" placeholder="Mot de passe">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn btn-primary">
            Se Connecter
        </button>
    </div>

</form>


