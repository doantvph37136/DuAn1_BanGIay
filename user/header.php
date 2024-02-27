<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/presiden/presiden/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Nov 2023 08:00:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Presiden – Fashion eCommerce HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="assets/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .hello{
            position: absolute;
            font-size: 20px;
            right:10px;
            z-index: 40px;
        }
    </style>
    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>
   
    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu offcanvas_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>    
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="header_right_info">
                            <ul>
                               <li class="search_box"><a href="javascript:void(0)"><img src="assets/img/icon/icon-search.png" alt=""></a>
                                   <div class="search_widget">
                                        <form action="#">
                                            <input placeholder="Search entire store here ..." type="text">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                               </li>
                               <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account.png" alt=""></a>
                                    <div class="dropdown_account">
                                        <div class="dropdown_account-list">
                                            <ul>
                                               
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                           <label>Currency</label>
                                            <ul>
                                                <li><a href="#">Euro</a></li>
                                                <li><a href="#">Pound Sterling</a></li>
                                                <li><a href="#">US Dollar</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                           <label>Language</label>
                                            <ul>
                                                <li><a href="#"><img src="assets/img/icon/language.png" alt=""> English</a></li>
                                                <li><a href="#"><img src="assets/img/icon/language2.png" alt=""> French</a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </li>
                               <li class="mini_cart_wrapper"><a href="index.php?act=viewgiohang&id=<?php echo $_SESSION['user']['id'] ?>"><img src="assets/img/icon/icon-cart.png" alt=""> <span class="item_count">2</span></a>
                                    <!--mini cart-->
                                 
                               </li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="dangnhap.php">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>

                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header header_two">
            <div class="header_container sticky-header">
                <div class="container">  
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php"><img src="./upload/logo.png" width="150px" height="100px" alt=""></a>
                                <h3 style="color:aliceblue">TOY SHOP</h3>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="header_container_right color_two">
                                <!--main menu start-->
                                <div class="main_menu menu_position"> 
                                    <nav>  
                                        <ul>
                                            <li><a class="active"  href="index.php">home</a>
                                                
                                            </li>
                                            <?php $danhmuc_home = listdanhmuc();
                                            foreach($danhmuc_home as $dm_home):
                                            
                                            ?>
                                            <li class="mega_items"><a href="index.php?act=seach&iddm=<?php echo $dm_home['id']?>&name=<?php echo $dm_home['name']?>"><?php echo $dm_home['name']?></a></a></li>

                                            </li>
                                            <?php endforeach ?>
                                        </ul>  
                                    </nav> 
                                </div>
                                <!--main menu end-->
                                <div class="header_right_info">
                                   <ul>
                                       <li class="search_box"><a href="javascript:void(0)"><img src="assets/img/icon/icon-search2.png" alt=""></a>
                                           <div class="search_widget" >
                                                <form action="index.php?act=seach" method="post" >
                                                    <input placeholder="TIM KIEM SAN PHAM.." type="text" name="kyw">
                                                    <button type="submit" value="tìm kiếm"  name="timkiem"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                       </li>
                                       <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account2.png" alt=""></a>
                                            <div class="dropdown_account">
                                                <div class="dropdown_account-list">
                                                    <ul>
                                                        <li><a href="index.php?act=dangnhap">My Account</a></li>
                                                        <li><a href="index.php?act=mycart&id=<?php if(isset($_SESSION['user'])){
                                                           echo $_SESSION['user']['id'];
                                                        }?>">Hóa Đơn Của Tôi</a></li>
                                                        <li><a href="#">Checkout</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown_account-list">
                                                   <label>Currency</label>
                                                    <ul>
                                                        <li><a href="#">Euro</a></li>
                                                        <li><a href="#">Pound Sterling</a></li>
                                                        <li><a href="#">US Dollar</a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown_account-list">
                                                   <label>Language</label>
                                                    <ul>
                                                        <li><a href="#"><img src="assets/img/icon/language.png" alt=""> English</a></li>
                                                        <li><a href="#"><img src="assets/img/icon/language2.png" alt=""> French</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                       </li>
                                       <li class="mini_cart_wrapper"><a href="index.php?act=viewgiohang&id=<?php if(isset($_SESSION['user'])){
                                        echo $_SESSION['user']['id'];
                                       } ?>"><img src="assets/img/icon/icon-cart2.png" alt=""> <span class="item_count">2</span></a>
                                            <!--mini cart-->
                                        
                                         
                                            <!--mini cart end-->

                                             <div class="hello">
                                             
                                             </div>
                                       </li>
                                   </ul>
                                  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>