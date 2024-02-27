

<style>
.container1{
    width: 100%;
    height: auto;
    padding: 20px 0 100px 0;
}
.heart{
    padding: 30px 0 20px 40px;
    width: 100%;
    height: 80px;
    background-color:darkgray;
}
.prodh{
 
    width: 1320px;
    border: 1px solid black;
    margin-left: 100px;
    margin-top: 20px;
    border-radius: 0 5px 5px 5px;
}
.thongtin,.mycart{
    background-color: azure;
    border: 1px solid black;
border-radius:0 5px 5px 5px;
margin-left: 30px;
margin-top: 50px;
margin-bottom: 100px;
}
.view{
    display: grid;
    grid-template-columns: 1fr 1fr;
}
.thongtin{
    width: 300px;
    height: 600px;
    
}
.mycart{
    height: auto;
    margin-left: -300px;
    margin-right: 20px;
}
.name{
    width: 200px;
    background-color: black;
    color:white;
    border-bottom-right-radius: 100px;
    height: 30px;
}
.myct{
    background-color: darkcyan;
    width: 200px;
    height: 30px;
    border-bottom-right-radius: 100px;
    color: white;
}
.img{
    width: 200px;
    border-radius: 50%;
    border: 2px solid greenyellow;
    margin-left: 50px;
    margin-top: 20px;
}
input{
    width: 240px;
    height: 30px;
    border: none;
    background-color: transparent;
    border-left: 1px solid purple;
    border-bottom: 1px solid purple;
    margin-left: 20px;
}
th,td{
    width: 200px;
    height: 40px;
    padding: 10px 10px 10px 10px;
}
table{
    margin-top: 20px;
    margin-left: 5px;
    margin-right: 5px;

}
table,th,td{
    border: 1px solid purple;
}
.loi{
    margin-left: 500px;
    font-size: 20px;
    margin-top: 100px;
}
.loic{
    color: blue;
}

</style>
<div class="container1">
    <div class="heart">
        <a href="index.php" style='color:blue'>Trang Chủ</a> / Đơn Hàng Của Tôi
    </div>
  <?php if(isset($_SESSION['user'])){?>
    <div class="prodh">
        <div class="name">  
            Hóa Đơn Của Tôi
        </div>
     <div class="view">
     <div class="thongtin">
     <div class="myct">Thông Tin Của Tôi</div>
     <div class="img">
        <img src="./<?php echo $_SESSION['user']['img'] ?>" alt="" width="200px">
     </div>
     <div class="ip">
        <input type="text" value='<?php echo $_SESSION['user']['user'] ?>'> <br> <br>
        <input type="text" value='<?php echo $_SESSION['user']['gmail'] ?>'> <br><br>
        <input type="text" value='<?php echo $_SESSION['user']['sdt'] ?>'><br><br>
        <input type="text" value='<?php echo $_SESSION['user']['address'] ?>'><br><br>
     </div>
     <div style="margin-left: 20px;">Cấp Độ Khách Hàng <input type="range" name="" id=""></div> 
        
     </form>
    </div>
    <div class="mycart">
        <div class="myct">Đơn Hàng  </div>
        <div class="viewhd">
            <table >
                <thead>
                    <th>ID</th>
                    <th>Mã Hóa Đơn</th>
                    <th>Ngày Đặt</th>
                    <th>Số Lượng HH</th>
                    <th>Tổng Tiền</th>
                    <th>Trạng Thái Đơn Hàng</th>
                </thead>
         <?php if($resultsmycart == ''){?>
            <tbody>
                <th>Không Có Đơn Hàng Nào </th>
            </tbody>
            <?php } else{?>
                <tbody>
                    <?php if(isset($resultsmycart )):?>
                    <?php foreach( $resultsmycart as $mycart):?>
                    <tr>
                        <td><?php echo $mycart['id'] ?></td>
                        <td>EXPRESSER<?php echo $mycart['mahoadon'] ?></td>
                        <td><?php echo $mycart['datebuy'] ?></td>
                        <td><?php echo $mycart['soluonghh'] ?></td>
                        <td><?php echo $mycart['tongprice'] ?>$</td>
                        <?php $n = $mycart['trangthai'];
                        $trangthai = trangthai_dh($n);
                        ?>
                        
                        <td><?php echo $trangthai ?></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                </tbody>
                <?php } ?>
            </table>
            <!-- <h3>Số Tiền Phải Trả Cho </h3> -->
        </div>
    </div>
     </div>
    </div>
    <?php }else{?>
       <div class="loi">
       <div>Vui Lòng Đăng Nhập Để Vào Đơn Hàng Của Tôi </div>
        <div style='margin-left:50px'>[...<a href="index.php" class='loic'>Trở Về Trang Chủ</a>...]</div>
       </div>
        <?php }?>
</div>