<?php

// Define variables and initialize with empty values
$username = "";
$password = "";
$loginError = ""; // Variable to store any login error message

// Check if form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // Get username and password from the form
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Simple authentication example (replace with actual user validation)
  // You'd typically store usernames and hashed passwords in a database
  if ($username == "admin" && password_verify("your_password_hash", $password)) {
    // Login successful
    session_start(); // Start the session
    $_SESSION["username"] = $username; // Store username in session
    header("Location: inventory.html"); // Redirect to inventory page
  } else {
    // Login failed
    $loginError = "Invalid username or password";
  }
}

?>
