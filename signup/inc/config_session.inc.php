<?php

ini_set('session.use_only_cookies', 1); // Use cookies only
ini_set('session.use_strict_mode', 1); // Enforce strict mode for session IDs

// Ensure session cookie parameters are set before starting the session
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 1800,
        'path' => '/',
        'domain' => 'localhost',
        'secure' => false, // Set to true if using HTTPS
        'httponly' => true, // Prevent JavaScript from accessing cookies
    ]);
    
    // Set session ID if user_id exists in session
    if (isset($_SESSION["user_id"])) {
        $userId = $_SESSION["user_id"];
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $userId;
        session_id($sessionId); // Set the session ID before session_start
    }
}

session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION["user_id"])) {
    // User is not logged in, check for session regeneration
    if (!isset($_SESSION['last_regenerate'])) {
        regenerate_session_id_loginin();
    } else {
        $interval = 60 * 30; // 30 minutes
        if (time() - $_SESSION['last_regenerate'] >= $interval) {
            regenerate_session_id_loginin();
        }
    }
} else {
    // User is logged in, check for session regeneration
    if (!isset($_SESSION['last_regenerate'])) {
        regenerate_session_id();
    } else {
        $interval = 60 * 30; // 30 minutes
        if (time() - $_SESSION['last_regenerate'] >= $interval) {
            regenerate_session_id();
        }
    }
}

function regenerate_session_id_loginin() {
    session_regenerate_id(true); // True to delete old session data

    // Ensure session ID is set before using it
    if (isset($_SESSION["user_id"])) {
        $userId = $_SESSION["user_id"];
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $userId;
        session_id($sessionId); // Set session ID before using it
    }

    $_SESSION['last_regenerate'] = time(); // Update last regeneration timestamp
}

// Function to regenerate session ID securely
function regenerate_session_id() {
    session_regenerate_id(true); // True to delete old session data
    $_SESSION['last_regenerate'] = time(); // Update last regeneration timestamp
}
