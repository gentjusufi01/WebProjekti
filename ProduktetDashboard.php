<?php
class ProduktetDatabase {
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

    public function getProduktet() {
        $sql = "SELECT * FROM `produktet`";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteProduktet($id) {
        $sql = "DELETE FROM `produktet` WHERE `ID_Produkti` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
    }

    public function updateProduktet($id, $Emri, $text) {
        $sql = "UPDATE `produktet` SET `Emri` = ?, `Qmimi` = ? WHERE `ID_Produkti` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$Emri, $text, $id]);
    }
}

$ProduktetDB = new ProduktetDatabase();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete_id"])) {
        $ProduktetDB->deleteProduktet($_POST["delete_id"]);
    } else if (isset($_POST["edit_id"])) {
        $ProduktetDB->updateProduktet($_POST["edit_id"], $_POST["edit_emri"], $_POST["edit_qmimi"]);
    }
}

$Produktet = $ProduktetDB->getProduktet();

if (!empty($Produktet)) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Produkti</th><th>Qmimi</th><th>Action</th><th>Edit</th></tr>";
    foreach ($Produktet as $row) {
        echo "<tr>";
        echo "<td>" . $row["ID_Produkti"] . "</td>";
        echo "<td>" . $row["Emri"] . "</td>";
        echo "<td>" . $row["Qmimi"] . "&euro;</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='delete_id' value='" . $row["ID_Produkti"] . "'>
                    <button style='display: inline-block;border-radius: 80px;background-color: #ff4321;padding: 10px 20px;color: white;font-weight: 600;' type='submit' name='id' >Delete</button>
                </form>
				</td>
				<td>
                <form style='display:flex;align-items:center;' method='post'>
                   <div> <input type='hidden' name='edit_id' value='" . $row["ID_Produkti"] . "'>
                    <input style='height:30px;' type='text' name='edit_emri' placeholder='Emri' value='" . $row["Emri"] . "'><br>
                    <input style='height:30px; type='text' name='edit_qmimi' placeholder='Qmimi' value='" . $row["Qmimi"] . "'>
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