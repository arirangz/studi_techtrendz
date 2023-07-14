<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => _DOMAIN_,
    /*'secure' => true,*/
    'httponly' => true
]);

session_start();