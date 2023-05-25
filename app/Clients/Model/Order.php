<?php 

namespace App\Clients\Model;
use App\Clients\Model\Config;
use App\Clients\Model\DbConnect;
use PDO;
class Order extends DbConnect{
    protected $db;
    // protected $conn;
    public function __construct(){
        
        $this->db = new Config();

    }

    public function CreateOrder($tongdonghang,$email,$name,$tel,$address,$pttt,$madh){
        $conn= parent::__Construct();
        $sql="INSERT INTO tbl_order(tongdonhang,pttt,name,email,tel,address,madh) VALUES('$tongdonghang','$pttt','$name','$email','$tel','$address','$madh')";
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }

    public function addtoCart($iddh,$idprod,$name,$price,$img,$sl){
        $sql="insert into cart(orderID,prodID,soluong,dongia,name_prod,img) values('$iddh','$idprod','$sl','$price','$name','$img')";
        $this->db->pdo_execute($sql);

    }

    public function ShowCart(){
        $sql="SELECT * FROM  cart";
        $result = $this->db->pdo_query($sql);
        return $result;
        // return $kq;
    }
}

?>