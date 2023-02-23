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
            die("Lidhja me databaze nuk u realizua {$this->dbname} :" . $pdoe->getMessage());
        }
    }

    public function getUsers() {
        $sql = "SELECT * FROM `register`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteUsers($id) {
        $sql = "DELETE FROM `register` WHERE `ID_User` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateUsers($id, $title, $text) {
        $sql = "UPDATE `register` SET `Username` = ?, `Password` = ?,`Email` = ? WHERE `ID_User` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$Username, $Password,$Email,$id]);
    }
}

$registerDB = new NewsDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete_id"])) {
        $registerDB->deleteUsers($_POST["delete_id"]);
    } else if (isset($_POST["edit_id"])) {
        $registerDB->updateUsers($_POST["edit_id"], $_POST["edit_username"], $_POST["edit_password"], $_POST["edit_email"]);
    }
}

$register = $registerDB->getUsers();

if (!empty($register)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Title</th><th>Text</th><th>Action</th><th>Edit</th></tr>";
    foreach ($register as $row) {
        echo "<tr>";
        echo "<td>" . $row["ID_User"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["Password"] . "</td>";
        echo "<td>" . $row["Email"] . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete_id' value='" . $row["ID_User"] . "'>
                    <button style='display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;' type='submit' name='id' >Delete</button>
                </form>
				</td>
				<td>
                <form style='display:flex;align-items:center;' method='post'>
                   <div> <input type='hidden' name='edit_id' value='" . $row["ID_User"] . "'>
                    <input style='height:30px;' type='text' name='edit_Username' placeholder='username' value='" . $row["Username"] . "'><br>
                    <input style='height:30px;' type='text' name='edit_Password' placeholder='password' value='" . $row["Password"] . "'><br>
                    <input style='height:30px;' type='text' name='edit_Email' placeholder='email' value='" . $row["Email"] . "'><br>
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