<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
	<style>

		table {
			border-collapse: collapse;
            margin: 0 auto;
		}
		table, th, td {
			border: 1px solid black;
		}
		th, td {
			padding: 10px;
		}
		th {
			background-color: #555;
			color: white;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
<?php include './header.php' ?>
    <br>
	<h1 style="text-align: center;">Spiffyline User List</h1> 
    <br>
	<?php
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "spiffyline";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} else {
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $id = $_POST["id"];
	        $sql = "DELETE FROM `register` WHERE `ID_User` = $id";
	        $conn->query($sql);
	    }
	    $sql = "SELECT * FROM `register`";
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	        echo "<form method='post'>";
	        echo "<table>";
	        echo "<tr><th>ID</th><th>Name</th><th>Username</th><th>Email</th><th>Action</th></tr>";
	        while ($row = $result->fetch_assoc()) {
	            echo "<tr>";
	            echo "<td>" . $row["ID_User"] . "</td>";
	            echo "<td>" . $row["Emri"] . "</td>";
	            echo "<td>" . $row["Username"] . "</td>";
	            echo "<td>" . $row["Email"] . "</td>";
	            if ($row["Roli"] !== "Admin") {
	                echo "<td><button style='display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;' type='submit' name='id' value='" . $row["ID_User"] . "'>Delete</button></td>";
	            } else {
	                echo "<td></td>";
	            }
	            echo "</tr>";
	        }
	        echo "</table>";
	        echo "</form>";
	    } else {
	        echo "<p>No results found.</p>";
	    }
	    $conn->close();
	}
	?>
	<br>
	<hr>
	<br>
	<h1 style="text-align: center;">News List</h1> 
	<br>
	<?php include './NEWSDASHBOARD.php'; ?>
    <br>
	<br>
	<hr>
	<br>
	<h1 style="text-align: center;">Product List</h1> 
	<br>
	<?php include './ProduktetDashboard.php'; ?>
    <br>
    <?php include './footer.php'?>


</body>
</html>
