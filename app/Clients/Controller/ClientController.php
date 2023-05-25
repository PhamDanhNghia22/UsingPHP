<?php 
ob_start();
// session_start();
// include_once './Model/Account.php';
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
use App\Clients\Model\Account;
use App\Clients\Model\Product;
use App\Clients\Model\Category;
use App\Clients\Model\Order;
// use header;
// use App\Model\DbConnect;
$cate = new Category();
$Prod= new Product();
$ord= new Order();
include_once ('./app/Clients/View/header.php'); 
if(isset($_GET["url"])){
    $url = $_GET["url"];
    switch($url){
        case 'productDeatil':
            if(isset($_GET['id'])){
                $id= $_GET['id'];
                $listCate = $cate->getCate();
                $prodDetail = $Prod->getOneProduct($id);

            }
            include './app/Clients/View/productDetail.php';
        break;
        case 'viewcart':
            // $_SESSION['cart'][]=$item;
            include './app/Clients/View/cart.php';
        break;
        case 'addCart':
            if(isset($_POST['addCart'])){
                $id = $_POST['idprod'];
                $name = $_POST['nameprod'];
                $price = $_POST['price'];
                $img = $_POST['img'];
                // $sl =$_POST['sl'];
                $sl=1;
                $i = 0;
                $fg = 0;
                if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                    foreach($_SESSION['cart'] as $item){
                        if($item[0]==$id){
                            $sl+=$item[4];
                            $fg=1;
                            $_SESSION['cart'][$i][4]=$sl;
                            break;
                        }
                        $i++;
                    }
                    // $countCart = sizeof($_SESSION['cart']);
                    // echo $countCart;

                }

                if($fg==0){
                    $item = array($id,$name,$price,$img,$sl);
                    $_SESSION['cart'][]=$item;
                }
                // $item = array($id,$name,$price,$img,$sl);
                // $_SESSION['cart'][]=$item;
                // headers_sent("location: index.php?url=viewcart");
                header('location: index.php?url=viewcart');
                ob_end_flush();

                // echo "<script>window.location.href= index.php</script>";
                
                
            }
            // include './app/Clients/View/cart.php';
        break;
        case 'delCart':
            if(isset($_GET['id'])){
                if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $key =>$value){
                        if($value[0] == $_GET['id']){
                            unset($_SESSION['cart'][$key]);
                            header('location: index.php?url=viewcart');
                            ob_end_flush();
                        }
                    }
                }
            }else{
                if(isset($_SESSION['cart'])) unset($_SESSION['cart']);
                header('location: index.php');
                ob_end_flush();
            }
            
            
        break;

        
        
        case 'order':
            // $ord= new Order();
            if(isset($_POST["thanhtoan"])){
                $tongdonghang= $_POST["tongdon"];
                $email= $_POST["email"];
                $name= $_POST["ht"];
                $tel= $_POST["sdt"];
                $address= $_POST["address"];
                $pttt= $_POST["pttt"];
                $madh= rand(0,999999);
                $iddh= $ord->CreateOrder($tongdonghang,$email,$name,$tel,$address,$pttt,$madh);
                $_SESSION['iddh']=$iddh;
                // $getOrder = $ord->ShowCart($_SESSION['iddh']);
                if(isset($_SESSION['cart'])&&(count($_SESSION['cart'])>0)){
                    foreach($_SESSION['cart'] as $item){
                        $ord->addtoCart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4]);
                        header('location: index.php?url=myorder');
                        ob_end_flush();
                    }

                    unset($_SESSION['cart']);
                }

            }
            // include './app/Clients/View/order.php';
        break;
        case 'myorder':
                $getOrder = $ord->ShowCart();
            // if(isset($_SESSION['iddh'])&&(count($_SESSION['iddh'])>0)){
            
            // }
            include './app/Clients/View/order.php';
        break;

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
            $prod = $Prod->List_Product();
            
            include_once './app/Clients/View/Clients/Home.php';
        break;
    }
}else{
    // $db = new Account();
    // // $db->test(); 
    $prod = $Prod->List_Product();
    include_once './app/Clients/View/Home.php';
}

include_once './app/Clients/View/footer.php';

?>
