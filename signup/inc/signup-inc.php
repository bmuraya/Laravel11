<? php

if ($_SERVER["REQUEST_METHOD"] === "POST" );{

    $username = $_POST["username"] = htmlspecialchars(trim($_POST["username"]));

    $pwd = $_POST["pwd"] = htmlspecialchars(trim($_POST["pwd"]));

    $email = $_POST["email"] = htmlspecialchars(trim($_POST["email"]));


    try{

         require_once 'dababase-handler-inc.php';
         require_once 'signup_model_inc.php';
         require_once 'signup_contr_inc.php';


        //  error handler 

        $errors = []; 
        
        if ( is_input_empty( $username , $pwd, $email)) {
            $errors["empty_input"] = "Please fill in all fields";
        }

        if (is_email_invalid( $email) ) {
            $errors["invalid_email"] = "The Email Is invalid";
        }

        if (is_username_taken( $pdo,  $username) ){
            $errors["username_taken"] = "Username is already taken";
        }

        if (is_email_registered($pdo, $email) ){
            $errors["email_used"] = "Email is already registered";
        }

            require_once 'config-session-inc.php';

        if($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
        }   
       

    } catch (PDOException $e) {
        die( "Query Failed: " . $e->getMessage());
    }


}  else {

    header("Location: ../index.php.php?form=error");
    die();
    

}