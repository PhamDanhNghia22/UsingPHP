<?php

// include_once './Model/Config.php';
namespace App\Clients\Model;
class Category{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    public function getCate(){
        $sql = "select * from category";
        $result = $this->db->pdo_query($sql);
        return $result;
    }
   

}


?>