<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'database.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'config_session.inc.php';

        // Error handler
        $errors = [];

        // Validate inputs
        if (is_input_empty($username, $pwd)) {
            $errors["empty_input"] = "Please fill in all fields.";
        }

        // Get user from the database
        $result = get_user($pdo, $username);

        // Debug the result to check for the password
        var_dump($result);  // Debugging the result array

        // Check if the username exists
        if (is_username_wrong($result)) {
            $errors["username_wrong"] = "Username is wrong.";
        }

        // Ensure password field is not null or empty before verifying
        if (!is_username_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["login_incorrect"] = "incorrect Login INfo!.";
        }
       
        // If there are errors, store them and redirect
        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("Location: ../index.php");
            die();
        }

        // Create a new session ID to prevent session fixation
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        // Store user information in the session
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION['last_regenerate'] = time();


        $username = htmlspecialchars($result["username"]); // To avoid XSS attacks

        $_SESSION["login_success"] = "Login successful.";

        header("Location: ../index.php?login=success");
        $pdo = null;
        $statement = null;
        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php");
    die();
}
?>
