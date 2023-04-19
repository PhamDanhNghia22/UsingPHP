<?php

namespace App\Admin\Model;
use App\Admin\Model\Config;

class Category{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    public function List_Cate(){
        $sql="select * from category";
        $result = $this->db->pdo_query($sql);
        return $result;
    }
    public function Edit_Cate($id){
        $sql="select * from category where id=".$id;
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }
    public function Update_Cate($id,$name,$status,$parent_id){
        $sql="update category set name='".$name."', status='".$status."', parent_id='".$parent_id."' where id=".$id;
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }
    public function Delete_Cate($id){
        $sql="delete from category where id=".$id;
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }
    public function Detail_Cate(){
        $sql="select * from category";
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }

    public function Insert_cate($name,$status,$parent_id){
        $sql ="insert into category(name,status,parent_id) values('$name','$status','$parent_id')";
        $this->db->pdo_execute($sql);
    }
   

}


?>