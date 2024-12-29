<?php

function check_signup_errors() {

    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];


        echo "<br>";

        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
        unset($_SESSION["errors_signup"]); // Clear errors after displaying them


    } else if (isset($_SESSION["signup_success"])) {
        echo "<br>";
        
        echo "<p class='success'>" . $_SESSION["signup_success"] . "</p>";
        unset($_SESSION["signup_success"]); // Clear success message after displaying it
    }
}
