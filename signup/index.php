<?php
require_once 'inc/config.session.inc.php';
require_once 'inc/signup.view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css"> 
</head>


<body>
    <main>
<h3>signup</h3>
<form action="inc/signup-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="email" name="email" placeholder="E-mail">
    <button type="submit" class="button" name="submit">Submit</button>

    </form>

    <?php

    check_signup_errors();
   ?>
 
 <hr>
    <h3>Login</h3>
<form action="inc/login-inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" class="button" name="submit">Submit</button>

    </form>

    </main>

</body>
</html>