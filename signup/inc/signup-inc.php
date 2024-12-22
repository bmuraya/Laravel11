<? php

if ($_SERVER["REQUEST_METHOD"] === "POST" );{

    $username = $_POST["username"] = htmlspecialchars(trim($_POST["username"]));

    $pwd = $_POST["pwd"] = htmlspecialchars(trim($_POST["pwd"]));

    $email = $_POST["email"] = htmlspecialchars(trim($_POST["email"]));


    try{

         require_once 'dbh.inc.php';

    } catch (PDOException $e) {
        echo "Query Failed: " . $e->getMessage();
    }


}  else {

    header("Location: ../index.php.php?form=error");
    die();

}