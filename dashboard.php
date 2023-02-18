<html>
<body>
    <h1>Urime DAshboard</h1>
    <?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "spiffyline";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM `register`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ID_User"] . "</td><td>" . $row["Emri"] . "</td><td>" . $row["Email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
    $conn->close();
}
?>

</body>
</html>