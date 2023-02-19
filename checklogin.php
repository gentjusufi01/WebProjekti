<?php
// with the appropriate credentials
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "spiffyline";

// Krijimi lidhjes
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Kontrolli lidhjes
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Marrja e te dhenave nga register form
$username = $_POST["Username"];
$password = $_POST["Passwordi"];

// Sanitize the input to prevent SQL injection attacks
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Queri për të kontrolluar nëse përdoruesi ekziston në bazën e të dhënave
$sql = "SELECT * FROM register WHERE Username='$username' AND Password='$password' AND Roli like 'Admin'" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location: dashboard.php");
} else {
  header("Location: index.php");
}

$conn->close();
?>
