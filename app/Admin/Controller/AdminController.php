<?php
require_once 'Views/Header.php';

use App\Admin\Model\Category;
use App\Admin\Model\Product;
$Cate = new Category();
$Prod = new Product();
if(isset($_GET["act"])){
    $act = $_GET["act"];
    switch($act){
        case 'listCategory':
            $listCate = $Cate->List_Cate();
            $CateDetail= $Cate->Detail_Cate();
            include_once 'Views/Category/listCategory.php';
        break;
        case 'addCategory':
            if(isset($_POST["submit_cate"])){
                $name = $_POST["name"];
                $status = $_POST["status"];
                $parent_id = $_POST["parent_id"];
                $Cate->Insert_cate($name,$status,$parent_id);
            }
            $listCate = $Cate->List_Cate();
            $CateDetail= $Cate->Detail_Cate();
            include_once 'Views/Category/AddCategory.php';
        break;
        case 'editCategory':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $Ecate = $Cate->Edit_Cate($id);
                $listCate = $Cate->List_Cate();
            }
            include_once 'Views/Category/EditCategory.php';
        break;
        case 'UpdateCategory':
            if(isset($_POST["submit_cate"])){
                $id = $_POST["id"];
                $name = $_POST["name"];
                $status = $_POST["status"];
                $parent_id = $_POST["parent_id"];
                $Cate->Update_Cate($id,$name,$status,$parent_id);
            }
            include_once 'Views/Category/EditCategory.php';
        break;
        case 'DeleteCate':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $Cate->Delete_Cate($id);
                $mess = "Xoá thành công";
                // exit();
                // header(location: '../admin/index.php?act=listCategory');
                // exit;
                
            }
            $CateDetail= $Cate->Detail_Cate();
            $listCate = $Cate->List_Cate();
            include_once 'Views/Category/listCategory.php';
        break;

        case 'addProduct':
            if(isset($_POST['submit_prod'])){
                $nameprod = $_POST['nameprod'];
                $price = $_POST['price'];
                $des = $_POST['des'];
                $category_id = $_POST['category_id'];
                $status = $_POST['status'];
                $img = $_FILES['img']['name'];
                $target_dir = "../public/upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $Prod->Insert_product($nameprod,$price,$img,$des,$category_id,$status);
                return 1;
                
            }
            $listCate = $Cate->List_Cate();
            include_once 'Views/Product/AddProduct.php';
        break;
    }
}
include_once 'Views/footer.php';


?>