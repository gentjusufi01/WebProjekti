<?php

// Assuming you have established a connection to the database already
// with the appropriate credentials
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "spiffyline";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve the submitted form data
$username = $_POST["Username"];
$password = $_POST["Passwordi"];

// Sanitize the input to prevent SQL injection attacks
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Construct the SQL query to check if the user exists in the database
$sql = "SELECT * FROM register WHERE Username='$username' AND Password='$password' AND Roli like 'Admin'" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // User exists in database, do something here (e.g. redirect to a dashboard page)
  header("Location: dashboard.php");
} else {
  // User does not exist in database, handle error here (e.g. show an error message)
  header("Location: index.php");
}

$conn->close();
?>
