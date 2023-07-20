<?php
try
{
    $pdo = new PDO("mysql:dbname=studi_techtrendz;host=localhost;charset=utf8mb4", "root", "");
}
catch(Exception $e)
{
    die("Erreur : ".$e->getMessage());
}

$id = $_GET["id"];
$query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$query->bindValue(":id", $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
?>
