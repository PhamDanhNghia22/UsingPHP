<?php
namespace App\Model;
use PDO;
class DbConnect{
    private $servername = "mysql:host=localhost;dbname=mydb;charset=utf8";
    private $username = "admin";
    private $password = "22112002pdn";
    public $conn;

    public function __Construct(){
        
        try {
            $this->conn = new PDO($this->servername, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "ket noi thanh cong";
            return $this->conn;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } 
    }

    

    
}
?>