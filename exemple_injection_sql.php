<?php
/*************************************
    / ! \ A NE PAS REPRODUIRE / ! \
    Exemple injection SQL
**************************************/
$pdo = new PDO('mysql:dbname=studi_techtrendz_dev;host=localhost;charset=utf8mb4', 'root', '');


$id = (int)$_GET['id'];

$query = $pdo->prepare("SELECT * FROM users WHERE id = $id");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);


/* REQUETE SECURISEE */
/*
$id = (int)$_GET['id'];

$query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
*/

?>
