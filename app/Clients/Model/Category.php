<?php

include_once './Model/Config.php';

class Category{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    public function getCate(){
        $sql = "select * from categories";
        $result = $this->db->pdo_query($sql);
        return $result;
    }
   

}


?>