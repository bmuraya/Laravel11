<?php


// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstname = htmlspecialchars( $_POST['firstname']);
//     $lastname = htmlspecialchars( $_POST['lastname']);
//     $favouritepet = htmlspecialchars( $_POST['favouritepet']);


//     if(empty($firstname) || empty($lastname) || empty($favouritepet)){
//         header("Location: ../MyPhp.php?form=empty");
//         exit();
//     }

//     echo "Your name is $firstname $lastname and your favourite pet is a $favouritepet.";

//     header("Location: ../MyPhp.php?form=success");
// }
// else{
//     header("Location: ../MyPhp.php?form=error");
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input
    $username = htmlspecialchars(trim($_POST['username']));
    $pwd = htmlspecialchars(trim($_POST['pwd']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Debugging: Check input values
    error_log("Username: $username");
    error_log("Password: $pwd");
    error_log("Email: $email");

    try {
        require_once 'dbh.inc.php';

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        $option = [
            'cost' => 12
        ];
        
        $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $option);

        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":pwd", $hashedpwd, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../database.php?form=success");
        die();
    } catch (PDOException $e) {
        echo "Query Failed: " . $e->getMessage();
    }
} else {
    header("Location: ../cal.php?form=error");
}

    
