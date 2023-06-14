<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Successful login
            $_SESSION['username'] = $username; // Store the username in the session
            echo "success";
            //echo "<script>window.location.href = 'index.php';</script>";
            exit;
        } else {
            // Invalid login
            echo "Invalid username or password!";
        }
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Stop execution to prevent further errors
}
?>
