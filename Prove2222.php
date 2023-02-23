<?php
class NewsDatabase {
    private $conn = null;
    private $host = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbname = "spiffyline";

    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
            $this->dbUsername, $this->dbPassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $pdoe) {
            die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
        }
    }

    public function getNews() {
        $sql = "SELECT * FROM `news`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteNews($id) {
        $sql = "DELETE FROM `news` WHERE `ID_News` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateNews($id, $title, $text) {
        $sql = "UPDATE `news` SET `Title` = ?, `Text` = ? WHERE `ID_News` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$title, $text, $id]);
    }
}

$newsDB = new NewsDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete_id"])) {
        $newsDB->deleteNews($_POST["delete_id"]);
    } else if (isset($_POST["edit_id"])) {
        $newsDB->updateNews($_POST["edit_id"], $_POST["edit_title"], $_POST["edit_text"]);
    }
}

$news = $newsDB->getNews();

if (!empty($news)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Title</th><th>Text</th><th>Action</th></tr>";
    foreach ($news as $row) {
        echo "<tr>";
        echo "<td>" . $row["ID_News"] . "</td>";
        echo "<td>" . $row["Title"] . "</td>";
        echo "<td>" . $row["Text"] . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete_id' value='" . $row["ID_News"] . "'>
                    <button type='submit'>Delete</button>
                </form>
                <form method='post'>
                    <input type='hidden' name='edit_id' value='" . $row["ID_News"] . "'>
                    <input type='text' name='edit_title' placeholder='Title' value='" . $row["Title"] . "'>
                    <input type='text' name='edit_text' placeholder='Text' value='" . $row["Text"] . "'>
                    <button type='submit'>Save</button>
                </form>
             </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found.</p>";
}
?>
<html>
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
</html>