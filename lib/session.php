<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => _DOMAIN_,
    /*'secure' => true,*/
    'httponly' => true
]);

session_start();

function adminOnly() 
{
    if (!isset($_SESSION['user'])) {
        // Rediriger vers login
        header('location: ../login.php');
    } else if ($_SESSION['user']['role'] != 'admin') {
        // Rediriger vers accueil
        header('location: ../index.php');
    }
}