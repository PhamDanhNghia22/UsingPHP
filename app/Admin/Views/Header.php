<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../public/admin/assets/images/favicon.ico">
    <!-- App title -->
    <title>GENZ FASHION</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="/../plugins/morris/morris.css">

    <!-- App css -->
    <link href="../public/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../public/admin/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../public/admin/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../public/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../public/admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
    
    <link href="../public/admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="../public/admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <link rel="stylesheet" href="../public/css/index.css">
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../public/admin/assets/js/modernizr.min.js"></script>
    


    <html>
</head>
<body class="fixed-left" >

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar" >

        <!-- LOGO -->
        <div class="topbar-left" >
            <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
            <!-- Image logo -->
            <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                    <!--<img src="assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                    <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
            <!--</a>-->
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    
                    
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5>Hi, John</h5>
                            </li>
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul> <!-- end navbar-right -->

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    

                    <li class="has_sub">
                        <a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right">2</span> <span> THỐNG KÊ </span> </a>

                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> SẢN PHẨM</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="../admin/index.php?act=ListProduct">Liệt kê</a></li>
                            <li><a href="../admin/index.php?act=addProduct">Thêm sản phẩm</a></li>

                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>DANH MỤC</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="../admin/index.php?act=listCategory"> Liệt kê</a></li>
                            <li><a href="../admin/index.php?act=addCategory"> Thêm danh mục</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span>THƯƠNG HIỆU</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/show-brand"> Liệt kê</a></li>
                            <li><a href="/admin/brand"> Thêm Thương Hiệu</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span>ĐƠN HÀNG</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/show-order"> Liệt kê</a></li>
                            

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span>CHI TIẾT ĐƠN </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/show-orderDetail"> Liệt kê</a></li>
                            

                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span>MÃ GIẢM GIÁ</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/show-coupon"> Liệt kê</a></li>
                            <li><a href="/admin/coupon"> Thêm coupon</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span>TÀI KHOẢN</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/admin/show-user"> Liệt kê</a></li>
                            

                        </ul>
                    </li>













                </ul>
            </div>




        </div>
        <!-- Sidebar -left -->

    </div>
   
    