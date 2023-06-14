<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        // Validate email format
        if (!$email) {
            // Return error response
            http_response_code(400);
            echo "Invalid email format!";
            exit;
        }

        // Check if username or email already exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            // Return error response
            http_response_code(400);
            echo "Username or email already exists!";
            exit;
        }

        // Insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $stmt->bindParam(':username', $username);

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashedPassword);

        $stmt->bindParam(':email', $email);

        // Execute the statement
        if ($stmt->execute()) {
            // Return success response
            echo "success";
            exit;
        } else {
            // Return error response
            http_response_code(500);
            echo "Registration failed!";
            exit;
        }
    }
} catch(PDOException $e) {
    // Return error response
    http_response_code(500);
    echo "Connection failed: " . $e->getMessage();
}
?>
