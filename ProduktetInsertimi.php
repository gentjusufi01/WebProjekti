<style>
.filterDiv {
  height: 358px;
  width: 358px;
  margin: 31px 31px;
}

.filterDiv .ac {
  text-align: center;
  padding-bottom: 16px;
  transition: all 500ms ease-in-out;
}

.filterDiv .ac:hover {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.filterDiv .ac .Image {
  overflow: hidden;
}

.filterDiv .ac img {
  transition: all 500ms ease-in-out;
}

.filterDiv .ac:hover img {
  transform: scale(1.2);
}

.filterDiv p {
  margin: 0;
}

.filterDiv .Qmimi {
  margin-top: 10px;
}

.h h1 {
  font-weight: 400;
}

.h span {
  color: #ff4321;
}

.ac-center {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 80px;
  margin-bottom: 80px;
}

.ac {
  text-align: center;
  padding-bottom: 16px;
  transition: all 500ms ease-in-out;
}

.ac:hover {
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}

.ac .img-cover {
  overflow: hidden;
}

.ac img {
  transition: all 500ms ease-in-out;
}

.ac:hover img {
  transform: scale(1.2);
}

@media only screen and (max-width: 567px) {
  .h {
    font-size: 32px;
  }
}

.ab {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-template-rows: repeat(8, 4vw);
  gap: 2rem;
}

.ab .item {
  overflow: hidden;
}

.ab img {
  object-fit: cover;
  height: 100%;
  width: 100%;
  transition: all 500ms ease-out;
}

.ab .item-1 img {
  object-fit: fill;
}

.ab img:hover {
  transform: scale(1.2);
}
</style>
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
      echo '<div style="height:358px; width:358px; margin:31px 31px;" class="filterDiv ' . $row["Kategoria"] . '">';
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
    if ($i % 4 == 0) {
      echo '</div><div style="display: grid; grid-template-columns: repeat(4, 1fr); grid-gap: 20px;">';
  }

echo '</div>';

// Close the database connection
$conn->close();
?>

<html>
<link rel="stylesheet" href="style.css">
</html>