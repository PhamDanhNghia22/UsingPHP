Đây là trang Clients </br>


<?php 
// session_start();
if(isset($_SESSION['user'])){
extract($_SESSION['user'])
?>
    Hello <?=$fulllname?></br>
    <?php if($role==1){ ?>
        <a href="">Admin</a></br>
    <?php }?>
<?php }?>




<a href="index.php?url=login">Đăng Nhập</a></br>
<a href="index.php?url=register">Đăng ký</a></br>
<a href="index.php?url=logout">Logout</a></br>