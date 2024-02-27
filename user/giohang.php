
<style>
.ctn{
    border: 5px solid black;
    width: 1100px;
    height: auto;
    margin-left: 200px;
    margin-top: 30px;
    margin-bottom: 30px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;

}

.hider{
    background-color: wheat;
    width: 100%;
    height: 70px;
   padding:  27px 0 27px 20px;
}
.giohang{
    height: auto;
    margin-bottom: 70px;
}
.namegh{
    width: 200px;
    height: 40px;
    background-color: wheat;
    color: white;
    padding: 8px 0 10px 20px;
    border-top-right-radius: 50px;
    
    
}
.ttkh{
    border: 1px solid black;
    width: 300px;
    height: 150px;
    background-color: white;
    margin-top: 20px;
    margin-left: 20px;
    padding: 10px 10px 10px 10px;
    border-radius: 3px;
}
table,th,td{
    border: 1px solid black;
}
th,td{
    width: 780px;
    padding: 20px;
    font-size: 15px;

    
}
table{
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
}
button{
    border: none;
    background-color: black;
    color: white;
     width: 110px;
}
.viewsp>a>img{
    width: 140px;
    height: 120px;
}
.viewsplq{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}
.viewsp>span{
    margin-left: 5px;
}
.cart_all{
    list-style: none;
    font-size: 10px;
    width: 100px;
    height: 20px;
    background-color: aqua;
}
.loi{
    color: red;
    padding: 30px 0 100px 200px;
}
.tr{
    background-color: gray;
    
    
}
</style>
<div class="hider">
      <a href="index.php">Trang Chủ</a> / Giỏ Hàng
    </div>
<div class="ctn">
   
    <?php if(isset($_SESSION['user'] )){
          ?>
    <div class="giohang">
        <div class="namegh">Giỏ Hàng</div>
      <div class="ttkh">
           <div class="ttkk">
            Thông Tin Khách Hàng
           </div>
           <div class="ttkk1">
            Name : <?php echo $_SESSION['user']['user']; ?> <br>
            Gmail :  <?php echo $_SESSION['user']['gmail']; ?> <br>
            Số Điện Thoại : 0<?php echo $_SESSION['user']['sdt']; ?> <br>
           
           </div>
      </div>
      <div class="sanphamgh">
        <table>
        <thead>
          <tr class='tr'>
                <th>Tên Sản Phẩm</th>
                <th>Ảnh Sản Phẩm</th>
                <th>GIÁ</th>
                <th>Số Lượng</th>
                
                <th>Tổng Tiền</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        
    <?php if(isset($resultgh)):
            foreach($resultgh as $gh):
         ?>       
         <tbody>
            <tr>
                <td><?php echo $gh['namesp'] ?></td>
                <td><img src="./upload/<?php echo $gh['img'] ?>" alt="" width="150px"></td>
                <td><?php echo $gh['price'] ?>$</td>
                <td><?php echo $gh['soluong'] ?></td>
                
                <td><?php echo $gh['tongprice'] ?>$</td>
                <td><a href="index.php?act=sanphamct&id=<?php echo $gh['idsp'] ?>"><button> Chỉnh Sửa</button></a> <br><br><a href="index.php?act=xoagh&id=<?php echo $gh['id'] ?>"><button>XÓA</button></a></td>
            </tr>
        </tbody>
       
        <?php endforeach?>
        <?php endif ?>
        
        <tbody>
            <tr>
            <td style="border:none  ;width: 400px;padding-left: 50px; font-size:20px;"> Tổng Tiền :<?php
            $tong =0;
            foreach($tongtiengh as $ttgh){
                $tong += $ttgh['tongprice'];
                }; echo $tong;?>$</td>
                <td style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"><a href="index.php?act=billthanhtoan&id=<?php echo $_SESSION['user']['id'] ?>"><button>Thanh Toán Tất Cả</button></a></td>
                
            </tr>
            
        </tbody>
        
        </table>
      </div>

    </div>
 
  <?php }else { ?>

    
    <div class="loi">
        <h3>Vui Lòng Đăng Nhập Để Vào Giỏ Hàng</h2>
    </div>
    <?php } ?>
   
   <hr>
    <div class="sanphamyt">
     <div class="namegh" style="width: 300px; margin-top: -17px;">
        Sản Phẩm Bạn Có Thể Thích
     </div>
     <div class="viewsplq">
                    <?php foreach ( $resultspgh as $splqv ):?>
                       
                        <div class="viewsp" style="border: 1px solid black; width: 170px; padding: 10px 10px 3px 10px; margin-top: 10px; margin-bottom:20px;margin-left: 100px;" >
                              <a href="index.php?act=sanphamct&id=<?php echo $splqv['id'] ?>"><img src="./upload/<?php echo $splqv['img'] ?>" alt="loi" width="130px"></a> <br>
                               <span style="font-size: 10px; font-weight:bold;"><?php echo $splqv['name'] ?></span> <br>
                               <span>price <?php echo $splqv['price'] ?>$</span>
                               <a href="index.php?act=sanphamct&id=<?php echo $splqv['id'] ?>" title="Thêm Vào Giỏ Hàng" class='hover_a'><div class='cart_all'> <li class="cart"><i class="zmdi zmdi-shopping-cart"></i>Thêm Giỏ Hàng</li> </div> </a> 
                        </div>
                        <?php endforeach ?>
                    </div>
    </div>
</div>