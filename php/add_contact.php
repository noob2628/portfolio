<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate form data (you can add your own validation logic here)

  // Connect to the database
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "portfolio_db";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    // Database connection error
    $response = [
      "success" => false,
      "message" => "Database connection error: " . $conn->connect_error
    ];
  } else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Execute the prepared statement
    if ($stmt->execute()) {
      // Insertion successful
      $response = [
        "success" => true,
        "message" => "Your message has been sent successfully."
      ];
    } else {
      // Insertion failed
      $response = [
        "success" => false,
        "message" => "Error: " . $stmt->error
      ];
    }

    // Close the statement
    $stmt->close();
    // Close the database connection
    $conn->close();
  }

  // Send the response back to the client
  header("Content-Type: application/json");
  echo json_encode($response);
}

?>
