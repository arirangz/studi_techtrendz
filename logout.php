<?php
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/session.php";
session_destroy();
unset($_SESSION);
header('location: login.php');