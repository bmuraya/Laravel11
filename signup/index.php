<?php
require_once 'inc/config_session.inc.php';
require_once 'inc/signup_view.inc.php';
require_once 'inc/login_view.inc.php';
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

 
    <?php
output_username();
?>

<?php  check_login_errors();
?>


<h3>signup</h3>
<form action="inc/signup.inc.php" method="post">

<?php   
 signup_inputs();

?>    
    <button type="submit" class="button" name="submit">Submit</button>

    </form>

    <?php
    check_signup_errors();

    ?>
  
 
 <hr>

 <?php  
   if (!isset($_SESSION["user_id"])) { ?>
          <h3>Login</h3>
<form action="inc/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit" class="button" name="submit">Submit</button>

    </form>
   <?php }  ?>




<br>


<h3>LogOut</h3>
<form action="inc/logout.inc.php" method="post">

    <button type="submit" class="button" name="submit">Logout</button>

    </form>


    </main>

</body>
</html>