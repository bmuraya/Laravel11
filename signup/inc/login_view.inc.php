<?php

declare(strict_types=1);

 function output_username() {
    if (isset($_SESSION["user_id"])) {
         echo "<p class='login'>You're logged in as " . $_SESSION["user_username"] . "</p>";
    } else {
        echo "you are not logged in";
    }
 }
function check_login_errors(){
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
        unset($_SESSION["errors_login"]); // Clear errors after displaying them
    } 
    
    elseif (isset($_SESSION["login_success"])) {
        echo "<br>";
        
        echo "<p class='success'>" . $_SESSION["login_success"] . "</p>";
        unset($_SESSION["login_success"]); // Clear success message after displaying it
    }
}