<?php

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

// Get form data
$emri = $_POST['emri'];
$mbiemri = $_POST['mbiemri'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['numri_kontaktues'];
$gjinia = $_POST['gjinia'];

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO `register` (`Emri`, `Mbiemri`, `Username`, `Password`, `Email`, `Phone`, `Gjinia`,`Roli`) VALUES (?, ?, ?, ?, ?, ?, ?,'Klient')");
$stmt->bind_param("sssssss", $emri, $mbiemri, $username, $password, $email, $phone, $gjinia);

// Execute statement
if ($stmt->execute() === TRUE) {
    header("Location: Register.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();

?>
