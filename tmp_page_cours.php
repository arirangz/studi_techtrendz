<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nom = "Doe";
    $prenom = "John";
    $age = 20;

    $fruits = ["Banane", "Orange", "Pomme"];

    // Tableau associatif
    $utilisateur = ["nom" => "Dupond", "prenom" => "Jean", "age" => 26];

    // Les tableaux multidimensionnels
    $utilisateurs = [
        ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
        ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
        ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
    ];

    ?>

    <h1>Page d'exemple</h1>
    <h2>Utilisateur</h2>
    <h3>Prénom de l'utilisateur : <?php echo $prenom; ?></h3>
    <h3>Nom de l'utilisateur : <?= $nom; ?></h3>

    <h2>Tableau</h2>
    <h3>Element du tableau : <?php echo $fruits[0] ?></h3>
    <h3>Element du tableau associatif : <?php echo $utilisateur["nom"] . " " . $utilisateur["prenom"] ?></h3>
    <h3>Element d'un tableau mutli : <?php echo $utilisateurs[2]["nom"] ?></h3>
    <h2>Boucle foreach 1</h2>
    <?php foreach ($fruits as $fruit) { ?>
        <p><?= $fruit ?></p>

    <?php } ?>

    <h2>Boucle foreach 2</h2>
    <?php foreach ($utilisateurs as $key => $utilisateur) { ?>
        <h3>Nom : <?= $utilisateur["nom"]; ?></h3>
        <p>Prénom : <?= $utilisateur["prenom"]; ?></p>
        <p>Age : <?= $utilisateur["age"]; ?></p>
    <?php } ?>


    <?php
    // LES FONCTIONS
    function calculSurface(float $largeur, float $longeur):float
    {
        return $largeur * $longeur;
    }

    $longeurCuisine = 4.5;
    $largeurCuisine = 2;
    $surfaceCuisine = calculSurface($largeurCuisine, $longeurCuisine);
    

    $longeurChambre = 4;
    $largeurChambre = 5;
    $surfaceChambre = calculSurface($largeurChambre, $longeurChambre);

    $surfaceTotal = $surfaceCuisine + $surfaceChambre;
    echo $surfaceTotal;

    ?>



</body>



</html>