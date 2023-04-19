<?php
namespace App\Admin\Model;
use App\Admin\Model\Config;

class Product{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    public function Insert_product($nameprod,$price,$img,$des,$category_id,$status){
        $sql="insert into products(name_prod,price,img,description,status_prod,cate_id) values('$nameprod','$price','$img','$des','$status','$category_id')";
        $this->db->pdo_execute($sql);

    }

    public function List_Product(){
        $sql="select products.id_prod ,products.name_prod, category.name , products.price , products.img , products.description, products.status_prod, products.cate_id products from products inner join category on products.cate_id=category.id";
        $result=$this->db->pdo_query($sql);
        return $result;
    }

    public function Edit_Product($id){
        $sql="select *from products where id_prod=".$id;
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }

    public function Update_Product($id,$nameprod,$price,$img,$des,$status,$category_id){
        $sql="update products set name_prod='".$nameprod."', price='".$price."', img='".$img."', description='".$des."', status_prod='".$status."', cate_id='".$category_id."' where id_prod=".$id;
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }


}

?>