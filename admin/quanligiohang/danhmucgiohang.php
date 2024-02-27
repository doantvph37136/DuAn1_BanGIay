<?php

?>
<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 700px auto;
            
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            padding-bottom: 20px;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
       table{
        margin-left: 5px;
       }
      th{
        width: 300px;
        height: 40px;
      }
   
      button{
        border: none;
        width: 50px;
        border-radius: 4px;
        transition: all 1s;
      }
      button:hover{
        background-color: gray;
        color: white;
      }
      .active1{
        padding: 5px 10px 5px 10px;
        background-color: black;
        color: white;
      
      }
      .span1{
        margin-left: 450px;
      }
      .col{
        border: 1px solid white;
      }
      .row{
        padding-top: 20px;
        width: 1150px;
       height: auto;
       padding-top: 50px;
       padding-bottom: 100px;
       border: 1px solid white;
       margin-left: 1px;
       margin-right: 1px;
       margin-top: 20px;
      }
      li{
        list-style: none;
        padding-top: 20px;
      }
      .pp{
        width: 200px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid aqua;
        color: black;

      }
      .pp:hover{
        background-color:  white;
        color: black;
      }
    </style>
    
    <div class='container'>
        <div class="text" style="color:white;"> QUAN TRI DON HANG</div>
         <div class="col">

         </div>
         <?php foreach ($selectgiohang as $dohang): ?>
            
         <div class="row">
         <form method="post" action="index.php?act=giohang">
             <ul>
                <li>MA HOA DON : <?php echo $dohang['mahoadon'] ?></li>
                <li>TEN KHACH HANG : <?php echo $dohang['hoten'] ?></li>
                <li>SO DIEN THOAI : <?php echo $dohang['sdt'] ?></li>
                <li>EMAIL : <?php echo $dohang['email'] ?></li>
                <li>DIA CHI : <?php echo $dohang['address'] ?></li>
                <li>PHUONG THUC THANH TOAN : <?php $pttt = $dohang['PT_TT'];
                    $phuongthuc_tt = phuongthucthanhtoan($pttt);
                    echo $phuongthuc_tt;
                ?></li>
                <li>NGÀY ĐẶT HÀNG : <?php echo $dohang['datebuy'] ?></li>  
                <li>SỐ HÀNG HÓA : <?php echo $dohang['soluonghh'] ?></li>  
                <li>TỔNG SỐ TIỀN : <?php echo $dohang['tongprice'] ?></li> 
                <li>TRANG THAI DON HANG : 
                  <?php foreach ($trangThaiDonHang as $trangThai){
                    if($trangThai['id'] == $dohang['trangthai']){
                      echo $trangThai['trangthai'];
                    }
                  };?></li>
                <li>CAP NHAT TRANG THAI DON HANG : <select name="trangthai" id="">
                  <?php foreach ($trangThaiDonHang as $trangThai){
                    if($trangThai['id'] == $dohang['trangthai']){
                      echo '<option selected value="'.$trangThai['id'].'">'.$trangThai['trangthai'].'</option>';
                    }else{
                      echo '<option selected value="'.$trangThai['id'].'">'.$trangThai['trangthai'].'</option>';
                    }
                  };?>
                </select> </li>
                <li>
                    
                </li>
                <input type="hidden" name="id" value="<?php echo $dohang['id']?>"> 
                <li><input type="submit" value="cap nhat" name="capnhat" class="pp"></li>
            </ul>
         </form>   
        
         </div>
        <?php endforeach ?>
        <span>
        <?php
            $limit = 4;
            $all_row_hoadon = all_row_hd();
            foreach( $all_row_hoadon as $do ):
                $allpage = ceil($do[0] / $limit);
                for($i=1;$i<$allpage;$i++):
        ?>
        <a href="index.php?act=giohang&page=<?php echo $i ?>"><?php echo $i ?></a>
        </span>
       <?php endfor ?>
        <?php endforeach ?>
    </div>
    