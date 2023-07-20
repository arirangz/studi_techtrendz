<?php
$mainMenu = [
    'index.php' => 'Accueil',
    'actualites.php' => 'Actualités',
    'a_propos.php' => 'A propos',
    'contact.php' => 'Contact',
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechTrendz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">
</head>

<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img width="150" src="assets/images/logo-tech-trendz.png" alt="Logo TechTrendz">
                </a>
            </div>
            <ul class="nav nav-pills">
                <?php foreach ($mainMenu as $page => $titre) { ?>
                    <li class="nav-item"><a href="<?= $page; ?>" class="nav-link <?php if (basename($_SERVER['SCRIPT_NAME']) === $page) {
                                                                                        echo 'active';
                                                                                    } ?>"><?= $titre; ?></a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="btn btn-outline-primary me-2">Déconnexion</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-outline-primary me-2">Login</a>
                    <a href="inscription.php" class="btn btn-primary">Inscription</a>
                <?php } ?>
            </div>
        </header>

        <main>