<?php
require 'php/login.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="background-container">
        <canvas></canvas>
    </div>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">

            <div class="signup-link">
                Don't have an account? <a href="signup.php">Create an account</a>.
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/fireworks.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>

