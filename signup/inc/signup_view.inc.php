<?php


declare(strict_types=1); 


function  signup_inputs()
 {

 if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" name="username" placeholder="Username">';
    }

    echo ' <input type="password" name="pwd" placeholder="Password">';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<input type="email" name="email" placeholder="E-mail" value="' . $_SESSION["signup_data"]["email"] . '">';

    } else {
        echo '<input type="email" name="email" placeholder="E-mail">';
    }
}


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
