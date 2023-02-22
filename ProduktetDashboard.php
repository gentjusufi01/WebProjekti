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
	        $sql = "DELETE FROM `produktet` WHERE `ID_Produkti` = $id";
	        $conn->query($sql);
	    }
	    $sql = "SELECT * FROM `produktet`";
	    $result = $conn->query($sql);
	    if ($result->num_rows > 0) {
	        echo "<form method='post'>";
	        echo "<table>";
	        echo "<tr><th>ID</th><th>Kateogoria</th><th>Produkti</th><th>Qmimi</th><th>Action</th></tr>";
	        while ($row = $result->fetch_assoc()) {
	            echo "<tr>";
	            echo "<td>" . $row["ID_Produkti"] . "</td>";
	            echo "<td>" . $row["Kategoria"] . "</td>";
	            echo "<td>" . $row["Emri"] . "</td>";
	            echo "<td>" . $row["Qmimi"] . "</td>";
	            
	                echo "<td><button type='submit' name='id' value='" . $row["ID_Produkti"] . "'>Delete</button></td>";
	       
	               
	            
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