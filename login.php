<?php 
require_once __DIR__ . "/lib/menu.php"; 
require_once __DIR__ . "/templates/header.php"; 
?>


<h1>Login</h1>

<form method="post">
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label" for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <input type="submit" value="Connexion" name="loginUser" class="btn btn-primary">

</form>

<?php require_once __DIR__ . "/templates/footer.php"; ?>