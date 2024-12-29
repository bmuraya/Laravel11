<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $pwd = trim($_POST["pwd"]);
    $email = trim($_POST["email"]);

    require_once 'database.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_contr.inc.php';
    require_once 'config_session.inc.php';

    // Error handler
    $errors = [];

    if (is_input_empty($username, $pwd, $email)) {
        $errors["empty_input"] = "Please fill in all fields.";
    }

    if (is_email_invalid($email)) {
        $errors["invalid_email"] = "The email is invalid.";
    }

    if (is_username_taken($pdo, $username)) {
        $errors["username_taken"] = "Username is already taken.";
    }

    if (is_email_registered($pdo, $email)) {
        $errors["email_used"] = "Email is already registered.";
    }

    if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../index.php");
        exit();
    }

    try {
        // Hash the password
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Insert user into the database
        $sql = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':username' => $username,
            ':pwd' => $hashedPwd,
            ':email' => $email,
        ]);

        // Redirect on success
        $_SESSION["signup_success"] = "Account created successfully. You can now log in.";
        header("Location: ../index.php");
        exit();
        
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>
