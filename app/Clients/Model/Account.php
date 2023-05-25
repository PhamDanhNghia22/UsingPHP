<?php
// include_once './Model/Config.php';
namespace App\Clients\Model;
use App\Clients\Model\Config;
// require_once './Model/DbConnect';
class Account extends DbConnect{
    protected $db;
    public function __Construct(){
        $this->db = new Config();

    }

    // public function test(){
    //     $this->db = parent::__Construct();
    //     echo $this->db;
    // }

    public function Insert_Account($fullname,$username,$mail,$password){
        $sql = "insert into account(fulllname,username,email,pass) values('$fullname','$username','$mail','$password')";
        $this->db->pdo_execute($sql);
    }

    public function Checkuser($username,$password){
        $sql = "select * from account where username='".$username."' and pass='".$password."'";
        $result = $this->db->pdo_query_one($sql);
        return $result;
    }


}

?>