<?php
class Prove{
    private $conn = null;
    private $host = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbname = "spiffyline";

    public function connectDB(){
        try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
        $this->dbUsername, $this->dbPassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC) . "<br/>";
        
        
        } catch (PDOException $pdoe) {
            
        die("Nuk mund të lidhej me bazën e të dhënave {$this->dbname} :" . $pdoe->getMessage());
        }
        
        return $this->conn;
        }
        
}
$prove= new Prove();
$prove->connectDB();
?>
