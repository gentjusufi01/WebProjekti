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
        if (isset($_POST["edit_id"]) && isset($_POST["edit_title"]) && isset($_POST["edit_text"])) {
			$newsDB->updateNews($_POST["edit_id"], $_POST["edit_title"], $_POST["edit_text"]);
		}
		
    }
}

$news = $newsDB->getNews();

if (!empty($news)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Title</th><th>Text</th><th>Action</th><th>Edit</th></tr>";
    foreach ($news as $row) {
        echo "<tr>";
        echo "<td>" . $row["ID_News"] . "</td>";
        echo "<td>" . $row["Title"] . "</td>";
        echo "<td>" . $row["Text"] . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete_id' value='" . $row["ID_News"] . "'>
                    <button style='display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;' type='submit' name='id' >Delete</button>
                </form>
				</td>
				<td>
                <form style='display:flex;align-items:center;' method='post'>
                   <div> <input type='hidden' name='edit_id' value='" . $row["ID_News"] . "'>
                    <input style='height:30px;' type='text' name='edit_title' placeholder='Title' value='" . $row["Title"] . "'><br>
                    <input style='height:30px; type='text' name='edit_text' placeholder='Text' value='" . $row["Text"] . "'>
					</div>
                    <button style='margin-left:5px; display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;' type='submit' name='id' >Save</button>
                </form>
             </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found.</p>";
}
?>