<form method="post" class="login100-form validate-form">
    <span class="login100-form-title">
        Changer le mot de passe
    </span>
    <?php if ($errors): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
            <span class="alert-inner--text"><strong>Echec!</strong> Mot de passe incorrect ! </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <br>
    <?php endif; ?>
    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="passe" placeholder="Ancien mot de passe">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate = "Password is required">
        <input class="input100" type="password" name="passe1" placeholder="Nouveau mot de passe">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>


    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn btn-primary">
            Changer
        </button>
    </div>

</form>


