<?php

use Random\Engine\Secure;

ini_set('sesssion.use_only_cookies', 1);
ini_set('sesssion.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 60 * 60 * 24,
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict',
    'secure' => true
]);


session_start();

if (!isset($_SESSION['last_regenerate'])) {
    $_SESSION['username