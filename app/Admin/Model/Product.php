<?php
namespace App\Admin\Model;
use App\Admin\Model\Config;

class Product{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    public function Insert_product($nameprod,$price,$img,$des,$category_id,$status){
        $sql="insert into products(name,price,img,description,status,cate_id) values('$nameprod','$price','$img','$des','$status','$category_id')";
        $this->db->pdo_execute($sql);

    }


}

?>