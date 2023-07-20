<?php

function getCategories($pdo) {
    $sql = 'SELECT * FROM categories';
    $query = $pdo->prepare($sql);
    $query->execute();
    
    return $query->fetchAll();
}