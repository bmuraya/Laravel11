<?php
require_once 'inc/config-session-inc.php';
require_once 'inc/signup_view_inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            font-size: 4em;
        }

        main {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        h3{
            color: #760505;
            margin:auto;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        .button{
            background-color: #760505;
            color: #fff;
            border: none;
            padding: 10px;
            width: 50%;
            cursor: pointer;
        }


</style>
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