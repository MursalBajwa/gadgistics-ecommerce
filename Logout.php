<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Handle logout
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	unset($_SESSION['login_success']);

    // Destroy the session
    session_unset();
    session_destroy();
    $_SESSION['logout_success'] = true;

    // Redirect to Webpage 3.0.php after logout
    header("Location: Webpage 3.0.php");
}
?>


