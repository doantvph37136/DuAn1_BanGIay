   <!--slider area start-->
   <style>
    .row_content{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        margin-top: 20px;
        margin-bottom: 50px;

    }
    .product_line2{
       width: 1000px;
       margin-left: 370px;
       margin-top: 100px;
    }
    .col{
        width: 210px;
        height: 400px;
        border: 1px solid black;
        margin-left: 20px;
        padding: 10px 10px 70px 10px;
        transition: 1s all;
        border-radius: 5px;
        position: relative;
        margin-top: 20px;
    }
    .img1{
        height: 210px;
        border: 2px solid gray;

    }
    .col:hover,
    .col:active,
    .col:focus,
    .col::after{
        border: 2p dashed red;
    }
    .name_product{
        font-size: 12px;
        color:black;
    }
    .price_product{
        font-size: 13px;
        color: black;
    }
    .cart{
        color: white;
        list-style: none;
        font-size: 14px;
        padding-bottom: -10px;
        
        
    }
    .cart_all{
        width: 150px;
        height: 30px;
        background-color: black;
        border: none;
        padding-left: 10px;
        padding-top: 5px;
        border-radius: 3px;
    }
    .withlist{
        margin-left: 170px;
        margin-top: 20px;
        position: absolute;
        top:245px;
        font-size: 19px;
    }.product_line2{
        width: 90%;
        margin: 0 auto;
    }
    

   </style>
   <section class="slider_section slider_s_two">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="./upload/giay-the-thao-banner.webp">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-7 col-md-8 col-sm-7">
                           <div class="slider_content">
                               
                                
                            </div>
                       </div>
                   </div>
               </div>
                
            </div>
            <div class="single_slider single_slid2  d-flex align-items-center" data-bgimg="./upload/1486709511_banner5.png">
                <div class="container">
                   <div class="row">
                       <div class="col-lg-7 offset-lg-5 col-md-7 offset-md-5 col-sm-7 offset-sm-5">
                           <div class="slider_content content_right">
                               
                               
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>
    <!--slider area end-->
    
    <!--shipping area start-->
    <div class="shipping_area mb-68 mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="zmdi zmdi-replay-30"></i>
                        </div>
                        <div class="shipping_content">
                            <h3>HOAN TRA VA DOI HANG TRONG VONG 30 NGAY</h3>
                            <p>HOAN TRA HANG VA HOAN TIEN TRONG VONG 30 NGAY</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <i class="zmdi zmdi-boat"></i>
                        </div>
                        <div class="shipping_content">
                            <h3>SU KIEN TRI AN KHACH HANG</h3>
                            <p>TANG QUA VA PHIEU MUA HANG 500.000VNĐ</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_shipping col_3">
                        <div class="shipping_icone">
                            <i class="zmdi zmdi-phone-in-talk"></i>
                        </div>
                        <div class="shipping_content">
                            <h3>HO TRO KHACH HANG 24/7</h3>
                            <p>LUON LUON HOAT DONG HO TRO KHACH HANG</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->
    
    <!--product area start-->
    <div class="product_area color_two mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product-header">
                        <div class="section_title title_style2">
                           <h2>Mẫu hot</h2>
                        </div>
                        
                    </div>
                </div>
            </div> 
            <div class="row_content">
                <?php 
                    $sanpham1 = loadall_sanpham_home();
                    foreach ($sanpham1 as $sp1):
                ?>
                <div class="col">
                    <a href="index.php?act=sanphamct&id=<?php echo $sp1['id']?>">
                    <img src="./upload/<?php echo $sp1['img'] ?>" width="200px" class="img1" id="product"></a>
                    <h3 class='name_product'><?php echo $sp1['name'] ?></h3>
                    <h3 class='price_product'><?php echo $sp1['price'] ?></h3>
                    <a href="index.php?act=cart" title="">
                    <div class='cart_all'> 
                        <li class="cart"><i class="zmdi zmdi-shopping-cart"></i> Thêm Giỏ Hàng</li> 
                    </div> </a>
                    <span class='withlist'><a href="index.php?act=withlist"><i class="zmdi zmdi-favorite-outline"></i></a></span>
                </div>
                <?php endforeach ?>
            </div>
            <div class="section_title title_style2">
                           <h2>Sell AND NEW COLECTION</h2>
                        </div>
    <!--product area end-->
    
    <!--banner area start-->
    
    <div class="banner_area banner-style2 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href=""><img src="./upload/20230420_ExnDny6Zbanner.webp" alt=""></a>
                            <div class="banner_conent-style1">
                                <h2>SELL 20%</h2>
                                <p>New Collection</p>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="home-banner-right">
                       <figure class="single_banner">
                            <div class="banner_thumb">
                                <a  href="shop.html"><img class="imgbn" src="./upload/images (2).jpeg"  alt="" ></a>
                                <div class="banner_conent-style1">
                                    <h2>COLECTION 2024</h2>
                                    
                                </div>
                            </div>


                            
                        </figure>
                        


                            



                               </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row_content">
                <?php 
                    $sanpham2 = loadall_sanphamsell();
                    foreach ($sanpham2 as $sp2):
                ?>
                <div class="col">
                    <a href="index.php?act=sanphamct&id=<?php echo $sp2['id']?>"><img src="./upload/<?php echo $sp2['img'] ?>" width="200px" class="img1" id="product"></a>
                    <h3 class='name_product'><?php echo $sp2['name'] ?></h3>
                    <h3 class='price_product'><strike><?php echo $sp2['price'] ?></strike> | <?php echo $sp2['pricekm'] ?></h3>
                    
                    <a href="index.php?act=cart" title="Thêm Vào Giỏ Hàng"><div class='cart_all'> <li class="cart"><i class="zmdi zmdi-shopping-cart"></i> Thêm Giỏ Hàng</li> </div> </a><span class='withlist'><a href="index.php?act=withlist"><i class="zmdi zmdi-favorite-outline"></i></a></span>
                </div>
                <?php endforeach ?>
            </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--banner area end-->
    <div class="section_title title_style2">
                        <h2>Sell AND NEW COLECTION</h2>
                        </div>
    <div class="product_line2">
        <div class="row_content">
                <?php 
                    $sanpham3 = loadall_sanpham_home2();
                    foreach ($sanpham3 as $sp3):
                ?>
                <div class="col">
                    <a href="index.php?act=sanphamct&id=<?php echo $sp3['id']?>"><img src="./upload/<?php echo $sp3['img'] ?>" width="200px" class="img1" id="product"></a>
                    <h3 class='name_product'><?php echo $sp3['name'] ?></h3>
                    <h3 class='price_product'><?php echo $sp3['price'] ?></h3>
                    <div class='cart_all'> <li class="cart"><a href="index.php?act=cart" title="Thêm Vào Giỏ Hàng"><i class="zmdi zmdi-shopping-cart"></i></a> Thêm Giỏ Hàng</li> </div> <span class='withlist'><a href="index.php?act=withlist"><i class="zmdi zmdi-favorite-outline"></i></a></span>
                </div>
                <?php endforeach ?>
            </div>
    </div>
    
    
    

    <!--blog area start-->
    <section class="blog_section color_two mb-62">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title title_style2">
                       <h2>THÔNG BÁO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="./upload/blog.jpeg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Đầu tháng 8</a></h4>
                                   <div class="articles_date">
                                        <span>08.05.2024</span>
                                        <p>SỰ KIỆN TRI ÂN</p>
                                    </div>
                                    <p class="post_desc">Sự kiện tri ân khách hàng thường niên mỗi năm một lần từ lần đầu thành lập năm 2017 sẽ chinhs thức bắt đầu...</p>
                                    <footer class="btn_more">
                                        <a href="blog-details.html"> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="./upload/images.jpeg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">BLACK FRIDAY SALE 2023</a></h4>
                                   <div class="articles_date">
                                        <span>25.05.2024</span>
                                        <p>FlASH SALE</p>
                                    </div>
                                    <p class="post_desc">Cơ hội mua giày gía rẻ cho mọi người nhân ngày BLACK FRIDAY</p>
                                    <footer class="btn_more">
                                        <a href="blog-details.html"> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="./upload/tranhve.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">Cộng tác viên</a></h4>
                                   <div class="articles_date">
                                        <span>08.05.2023</span>
                                        <p>TÌM KIẾM CTV</p>
                                    </div>
                                    <p class="post_desc">Cơ hội kiếm thêm thu nhập ổn định và lâu dài </p>
                                    <footer class="btn_more">
                                        <a href="blog-details.html"> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="./upload/naruto.jpg" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                   <h4 class="post_title"><a href="blog-details.html">KẾT HỢP THƯƠNG HIỆU</a></h4>
                                   <div class="articles_date">
                                        <span>09.05.2021</span>
                                        <p>COLAD</p>
                                    </div>
                                    <p class="post_desc">SỰ KIỆN KẾT HỢP GIỮA CÁC THƯƠNG HIỆU NỔI TIẾNG TRÊN THỊ TRƯỜNG SẢN XUẤT</p>
                                    <footer class="btn_more">
                                        <a href="blog-details.html"> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog area end-->
    
   
    <!--brand area end-->