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
    // Insert form data into the database
    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
      // Insertion successful
      $response = [
        "success" => true,
        "message" => "Your message has been sent successfully."
      ];
    } else {
      // Insertion failed
      $response = [
        "success" => false,
        "message" => "Error: " . $sql . "<br>" . $conn->error
      ];
    }

    // Close the database connection
    $conn->close();
  }

  // Send the response back to the client
  header("Content-Type: application/json");
  echo json_encode($response);
}
?>
