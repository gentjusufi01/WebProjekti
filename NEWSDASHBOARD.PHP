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
	        $sql = "DELETE FROM `news` WHERE `ID_News` = $id";
	        $conn->query($sql);
	    }
	    $sql = "SELECT * FROM `news`";
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	        echo "<form method='post'>";
	        echo "<table>";
	        echo "<tr><th>ID</th><th>Title</th><th>Text</th><th>Action</th></tr>";
	        while ($row = $result->fetch_assoc()) {
	            echo "<tr>";
	            echo "<td>" . $row["ID_News"] . "</td>";
	            echo "<td>" . $row["Title"] . "</td>";
	            echo "<td>" . $row["Text"] . "</td>";
	            
	                echo "<td><button style='display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;'  type='submit' name='id' value='" . $row["ID_News"] . "'>Delete</button></td>";
	       
	               
	            
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