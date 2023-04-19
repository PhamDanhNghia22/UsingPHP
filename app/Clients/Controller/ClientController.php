<?php 
// include_once './Model/Account.php';
use App\Model\Account;
// use App\Model\DbConnect;
include_once './app/Clients/View/header.php'; 
if(isset($_GET["url"])){
    $url = $_GET["url"];
    switch($url){
        case 'register':
            $acount = new Account();
                if(isset($_POST["submit_dk"])){
                    // print_r($_POST);
                    if(isset($_POST["fullname"])&& isset($_POST["username"]) && isset($_POST["mail"]) && isset($_POST["password"])){
                        if(!empty($_POST["fullname"])&& !empty($_POST["username"]) && !empty($_POST["mail"]) && !empty($_POST["password"]) ){
                            $fullname = $_POST["fullname"];
                            $username = $_POST["username"];
                            $mail = $_POST["mail"];
                            $password = $_POST["password"];
                            $acount->Insert_Account($fullname,$username,$mail,$password);
                            $thongbao = "Đăng ký thành công";
                        }
                        else{
                            $error= "Vui lòng không bỏ trống";
                        }
                    }
                    
                        
                        
                }
                // $acount->test();

            include './app/Clients/View/Register.php';
        break;
        case 'login':
            $account = new Account();
            if(isset($_POST["submit_login"])){
                
                if(isset($_POST["username"]) && isset($_POST["password"])){
                        if(!empty($_POST["username"]) && !empty($_POST["password"]) ){
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $checkAc = $account->Checkuser($username,$password);
                            $mess = 0;
                            if(is_array($checkAc)){
                                $_SESSION['user'] =  $checkAc;
                                // echo "login Successfully";
                                $mess = 1;
                                
    
                            }
                            



                            // exit( $username ."=" .$password );
                            // exit($username . "=" . $password );
                            
                           
                            // echo $mess;
                            
                        }
                        
                        
                    
                }
                else{

                    $err= 0;
                    return $err;
                    // echo $err;
                    // echo $err;
                    
                }
                
                    
                    
            }
            
            include './app/Clients/View/Clients/Login.php';
        break;
        case 'logout':
            session_unset();
            header('location: index.php');
        break;
        default:
            
            include './app/Clients/View/Clients/Home.php';
        break;
    }
}else{
    // $db = new Account();
    // // $db->test(); 
    include './app/Clients/View/Home.php';
}

include './app/Clients/View/footer.php';

?>