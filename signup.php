<?php 
require_once __DIR__ . "/lib/menu.php"; 
require_once __DIR__ . "/templates/header.php"; 
?>


<div class="content-form">
    <div class="row content-connexion">
        <p class="text-center fs-1 fw-bold">S'inscrire</p>
    </div>
    <form method="post">
        <div class="row">
            <div class="col-25">
                <label class="form-label" for="email" placeholder="Email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="col-25">
                <label class="form-label" for="password" placeholder="Mot de passe..">Mot de passe</label>
            </div>
            <div class="col-75">
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="content-btn-submit">
                <br>
                    <input type="submit" value="Soumettre" name="signupUser">
                    <input type="submit" value="Annuler " name="outSignUpUser">
            </div>
        </div> 
    </form>
</div>
<?php require_once __DIR__ . "/templates/footer.php"; ?>