<?php
$nom = "John";
$age = 10;
$prix = 15.5;
/*
if ($age >= 18) {
    echo "Majeur !";
} elseif ($age >= 13) {
    echo "Ado";
} else {
    echo "Enfant !";
}
*/


// Tableau simple
$fruits = ["Banane", "Orange", "Pomme"];


foreach ($fruits as $key => $value) { ?>

    <h2 class="fruit"><?php echo $value; ?></h2>

<?php }


// Tableau associatif
$utilisateur = ["nom" => "Dupond", "prenom" => "Jean", "age" => 26];

//echo $utilisateur["nom"]." ".$utilisateur["prenom"];

//Les tableaux multidimensionnels
$utilisateurs = [
    ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
    ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
    ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
];

//echo $utilisateurs[1]["nom"];

foreach ($utilisateurs as $key => $utilisateur) {
    echo $utilisateur["nom"];

}


?>


<section id="utilisateurs">
    <?php foreach ($utilisateurs as $key => $utilisateur) { ?>
        <article class="utilisateur">
            <h2><?=$utilisateur["nom"]." ".$utilisateur["prenom"] ?></h2>
            <p>Age : <?=$utilisateur["age"] ?> ans</p>
        </article>
    <?php } ?>
</section>