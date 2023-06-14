<?php
session_start(); // Start the session

// Redirect to login page if the user is not logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['message'] = "Please login first.";
    header("Location: login.php");
    exit();
}

// Logout logic
if (isset($_GET['logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    $_SESSION['message'] = "You have been logged out successfully.";
    header("Location: login.php");
    exit();
}
?>
