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

    session_start(); // Start the session
}

// Check if session needs regeneration
if (!isset($_SESSION['last_regenerate'])) {
    regenerate_session_id();
} else {
    $interval = 60 * 30; // 30 minutes
    if (time() - $_SESSION['last_regenerate'] >= $interval) {
        regenerate_session_id();
    }
}

// Function to regenerate session ID securely
function regenerate_session_id() {
    session_regenerate_id(true); // True to delete old session data
    $_SESSION['last_regenerate'] = time(); // Update last regeneration timestamp
}
