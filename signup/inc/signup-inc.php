<? php

if ($_SERVER["REQUEST_METHOD"] === "POST" );{

    $username = $_POST["username"] = htmlspecialchars(trim($_POST["username"]));

    $pwd = $_POST["pwd"] = htmlspecialchars(trim($_POST["pwd"]));

    $email = $_POST["email"] = htmlspecialchars(trim($_POST["email"]));


    try{

         require_once 'dbh.inc.php';
         require_once 'signup_model_inc.php';
         require_once 'signup_contr_inc.php';


        //  error handler 
        if ( is_input_empty( $username , $pwd, $email)) {
            
        }
       

    } catch (PDOException $e) {
        echo "Query Failed: " . $e->getMessage();
    }


}  else {

    header("Location: ../index.php.php?form=error");
    die();

}