<?php
// include_once './Model/DbConnect.php';
namespace App\Clients\Model;
use App\Clients\Model\DbConnect;
use PDO;
// require_once './Model/DbConnect.php';
class Config extends DbConnect{
    // protected $connect;
    // public function __Construct(){
    //     $this->connect = new DbConnect();
    // }
    public function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = parent::__Construct();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);


        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }

    }
    public function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn =parent::__Construct();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch(PDOException $e){
            throw $e;

        }finally{
            unset($conn);
        }

    }

    public function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = parent::__Construct();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }catch(PDOException $e){
            throw $e;

        }finally{
            unset($conn);
        }

    }
}


?>