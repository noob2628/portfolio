<?php
require 'php/signup.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="background-container">
        <canvas></canvas>
    </div>
    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST" action="signup.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <input type="submit" value="Sign Up">
            
            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>.
            </div>
        </form>
    </div>
    <script type="text/javascript" src="js/fireworks.js"></script>
    <script type="text/javascript" src="js/signup.js"></script>
</body>
</html>
