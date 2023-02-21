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
$sql = "SELECT * FROM produktet";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Loop through each row of data and display it on your website
$i = 0;
foreach ($result as $row) {
    //if ($row["Kategoria"] == $_GET["Kategoria"]) {
      echo '<div style="height:331px; width:331px; margin:auto 30px;" class="filterDiv ' . $row["Kategoria"] . '">';
      echo '<div class="ac">';
      echo '<div class="Image">';
      echo '<img src="' . 'foto/' . $row['Image'] . '" alt="" />';
      echo '</div>';
      echo '<p>' . $row["Emri"] . '</p>';
      echo '<div class="Qmimi">' . $row["Qmimi"] . '€</div>';
      echo '</div>';
      echo '</div>';
   // }
  }

    $i++;
    // if ($i % 4 == 0) {
    //     echo '</div><div style="display: grid; grid-template-columns: 4fr 1fr; grid-gap: 20px;">';
    // }

echo '</div>';

// Close the database connection
$conn->close();
?>

<html>
<link rel="stylesheet" href="style.css">
</html>