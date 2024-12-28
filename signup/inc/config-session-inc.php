<?php

ini_set('sesssion.use_only_cookies', 1);
ini_set('sesssion.use_strict_mode', 1);


session_set_cookie_params([
    'lifetime' => 1800,
    'path' => '/',
    'domain' => 'localhost',
    'secure' => true,
    'httponly' => true,
   
]);

//prevent session  from being used more than 30 mins by hacker

 session_start();

if (!isset($_SESSION['last_regenerate'])) {
       regenerate_session_id();

} else{
    $interval = 60 * 30;
    if(time() - $_SESSION['last_regenerate'] >= $interval){
       regenerate_session_id();
    }
}

function regenerate_session_id(){
    session_regenerate_id();
    $_SESSION['last_regenerate'] = time();
}