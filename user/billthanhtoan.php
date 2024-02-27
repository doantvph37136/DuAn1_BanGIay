
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
    width: auto;
    height: auto;
    padding: 30px 30px 40px 20px;
    background-color: darkgrey;
    margin-top: 20px;
    margin-left: 10px;
   margin-right: 10px;
    border-radius: 3px;
}
table,th,td{
    border: 1px solid black;
}
th,td{
    width: 180px;
    padding: 20px;
    font-size: 15px;
    
}
table{
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 10px;
    border-radius: 5px;
}
button{
    border: none;
    background-color: black;
    color: white;
     width: 110px;
     border-radius: 5px;
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
.bt{
    width: 200px;
margin-left: 20px;
margin-top: 30px;
background-color: black;
border: none;
color: white;
transition: all 1s;
border-radius: 5px;
height: 30px;
}
.bt:hover{
    background-color: white;
    color: black;
    border: 2px dashed black;
}
.ip{
    width: 700px;
    height: 30px;
    border: none;
    background-color: transparent;
    border-left: 1px solid purple;
}
.success{
        background-color: lightgreen;
        border: none;
        width: 1099px;
        height: 35px;
        margin-top: 20px;
        border: 1px dashed black;
        padding: 5px 0 5px 10px;
    }
</style>
<?php
function validateRadios($radios){
    if(empty($radios)){
        return ' Vui lòng chọn phương thức thanh toán !';
    }
    return '';
}


$radios = '';
$radiosErr = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $radios = $_POST['pttt'];
    $radiosErr =  validateRadios($radios);
}
?>
<div class="hider">
      <a href="index.php">Trang Chủ</a> / Giỏ Hàng / Đơn Hàng
    </div>
<div class="ctn">
    
<form action="index.php?act=billthanhtoan" method="post">
<div class="giohang">
        <div class="namegh">Thanh Toán</div>
      <div class="ttkh">
           <div class="ttkk">
            Thông Tin Khách Hàng
           </div>
           <div class="ttkk1">
           <input type="text" value="<?php echo $_SESSION['user']['user'] ?>" class='ip' name='name'> <br> <br> 
           <input type="text" value="<?php echo $_SESSION['user']['gmail'] ?>" class='ip' name="email" > <br> <br> 
           <input type="text" value="0<?php echo $_SESSION['user']['sdt'] ?>" class='ip' name="sdt" > <br><br> 
           <input type="text" value="<?php echo $_SESSION['user']['address'] ?>" class='ip' name="address" > <br><br> 
           <input type="hidden" name="id" value='<?php echo $_SESSION['user']['id'] ?>'>
           <input type="hidden" name="trangthai" value='1'>
           </div>
      </div>
      <div class="ttkh" style='font-weight: bold;'>
      <div class="ttkk">
           Phương Thức Thanh Toán
           </div> <br><br>
           <input type="radio" name="pttt" id=" "value='0' checked>Thanh Toán Khi Nhận Hàng <input type="radio" name="pttt" id="" value='1'>Thanh Toán Qua Tài Ứng Dụng Ngân Hàng
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
                <td><br><a href="index.php?act=xoagh&id=<?php echo $gh['id'] ?>"><button>XÓA</button></a></td>
            </tr>
        </tbody>
       
        <?php endforeach?>
        <?php endif ?>
        
        <tbody>
            <tr>
            <td style="border:none  ;width: 400px;padding-left: 50px; font-size:20px;"> Tổng Tiền :
            <?php
            $tong =0;
            if(isset($tongtiengh)):?>
              <?php

foreach($tongtiengh as $ttgh){
    $tong += $ttgh['tongprice'];
    }; echo $tong; 
                ?>
           
           
           <?php endif ?> $</td>
                <input type="hidden" name='tongtien' value="<?php echo $tong ?>" >
                <td style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
                <td  style="border: none;"></td>
              
               
            </tr>
            
        </tbody>
      
       
        
        <input type="hidden" name="soluongdh" value='<?php echo $tongsoluong ?>'>
        </table>
     <input type="submit" value="Đồng Ý Đặt Hàng" name='dathang' class='bt'>
      </div>
   <!-- <?php print_r($soluonghh) ?> -->
    </div>
</form>
 <?php


if(isset( $_COOKIE['dathang'])){?>
          <div class="success">
                    <?php echo $_COOKIE['dathang']; ?>
                   
                </div>
   
      
     <?php } ?>
    

   
  
</div>