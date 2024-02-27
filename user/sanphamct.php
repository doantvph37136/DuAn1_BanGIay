<div class="" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">  
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img  src="./upload/<?php echo $spct['img'] ?>" alt=""></a>    
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $spct['img1'] ?>" alt=""></a>    
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $spct['img2'] ?>" alt=""></a>    
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="./upload/<?php echo $spct['img3'] ?>" alt=""></a>    
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">    
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="./upload/<?php echo $spct['img'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                             <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="./upload/<?php echo $spct['img1'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                           <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="./upload/<?php echo $spct['img2'] ?>" alt=""></a>
                                        </li>
                                        <li>
                                           <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="./upload/<?php echo $spct['img3'] ?>" alt=""></a>
                                        </li>

                                    </ul>
                                </div>    
                            </div>  
                        </div> 
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2><?php echo $spct['name'] ?></h2> 
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price"><?php if($spct['pricekm'] > 0){
                                       echo $spct['pricekm'];
                                    }else{
                                        echo $spct['price'];
                                    } ?> VNĐ</span>    
                                      
                                </div>
                                <div class="modal_description mb-15">
                                    <p><?php echo $spct['mota'] ?> </p>    
                                </div> 
                                
                                    
                                    <div class="modal_add_to_cart">
                                        <form action="index.php?act=giohang" method="post">
                                            <input type="hidden" name="price" value="<?php if($spct['pricekm'] > 0){
                                       echo $spct['pricekm'];
                                    }else{
                                        echo $spct['price'];
                                    } ?>" >
                                    <input type="hidden" name="name" value="<?php echo $spct['name'] ?>">
                                    <input type="hidden" name="img" value="<?php echo $spct['img'] ?>" >
                                    <input type="hidden" name="id" value="<?php echo $spct['id'] ?>" >
                                            <input min="1" max="100" step="1" value="1" type="number" name="soluong">
                                            <button type="submit" name="addgh">add to cart</button>
                                        </form>
                                    </div>   
                                </div>

                             <?php if(isset($_COOKIE['tb'])){ ?>
                                <script>
                                    alert('<?php echo $_COOKIE['tb'] ?>');
                                </script>
                                <style>
                                    .binhluanform{
                                        position: absolute;
                                        left:300px;
                                    }
                                </style>
                                <?php }?>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                                     <script>
                                                              $(document).ready(function(){
                                         
                                        
                                                            $("#form").load("./user/formbinhluan.php", {idsp:<?php echo $_GET['id']  ?>});
                                        
                                                   });
                                                    </script>
                                <div id="form" class="binhluanfrom">
                                    
                                     
                                </div>

                                
                            </div>    
                        </div>    
                    </div>     
                </div>
            </div>    
        </div>
    </div>
</div>