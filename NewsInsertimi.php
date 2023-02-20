<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spiffyline";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform a SELECT query to retrieve the news data
$sql = "SELECT * FROM news";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Loop through each row of data and display it on your website
$i = 0;
echo '<div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;">';
foreach ($result as $row) {
    echo '<div style="display: flex; flex-direction: column;   padding:100px;">';
    echo '<img src="' . 'foto/' . $row['Image'] . '" style="width: 100%; height: 600px; object-fit: cover;">';
    echo '<h3 style="margin: 10px 0;">' . $row['Title'] . '</h3>';
    echo '<p style="margin: 10px 0;">' . $row['Text'] . '</p>';
    echo '</div>';

    $i++;
    if ($i % 2 == 0) {
        echo '</div><div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;">';
    }
}
echo '</div>';

// Close the database connection
$conn->close();
?>
