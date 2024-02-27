   <!--slider area start-->
   <style>
    .row_content{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        margin-top: 20px;
        margin-bottom: 50px;

    }
    .product_line2{
       width: 980px;
       margin-left: 360px;
    }
    
    .col{
        width: 210px;
        height: 350px;
        border: 1px solid black;
        margin-left: 20px;
        padding: 10px 10px 70px 10px;
        transition: 1s all;
        border-radius: 5px;
        position: relative;
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
    
    
    
    <!--banner area end-->
    <div class="section_title title_style2">
                      <h2>
                      <?php
                       if(isset($nameiddm)){
                        echo $nameiddm;
                       }
                       if(isset($kyw)){
                        echo $kyw;
                       }
                       ?>
                      </h2>
                        </div>
    <div class="product_line2">
        <div class="row_content">
                <?php 
                    
                    foreach ($seach as $sp):
                ?>
              

                <div class="col">
                      <a class="alo" href="index.php?act=sanphamct&id=<?php echo $sp['id']?>">
                    <img src="./upload/<?php echo $sp['img'] ?>" width="200px" class="img1" id="product"></a>
                    <h3 class='name_product'><?php echo $sp['name'] ?></h3>
                    <h3 class='price_product'><?php echo $sp['price'] ?></h3>
                    <div class='cart_all'> <li class="cart"><a href="index.php?act=cart" title="Thêm Vào Giỏ Hàng"><i class="zmdi zmdi-shopping-cart"></i></a> Thêm Giỏ Hàng</li> </div> <span class='withlist'><a href="index.php?act=withlist"><i class="zmdi zmdi-favorite-outline"></i></a></span>
                </div>
                <?php endforeach ?>
            </div>
    </div>
    
    
    