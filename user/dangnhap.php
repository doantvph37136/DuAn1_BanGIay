<style>
  .header {
    border: 1px solid black;
    width: 1000px;
    height: 200px;
    margin-left: 400px;
    margin-top: 30px;
    padding: 10px 0 0 10px;
    margin-bottom: 30px;
    border-radius: 5px;
    background-color: darkgrey;
  }
  .heder {
    width: 100%;
    height: 70px;
    background-color: beige;
    margin-top: 20px;
    padding-top: 27px;
    padding-left: 20px;
    font-size: 24px;
    font-weight: bold;
  }

  .ip {
    border: none;
    background-color: transparent;
    width: 800px;
    height: 35px;
    border-bottom: 2px solid purple;
  }

  form {
    margin-left: 40px;
  }

  .bt {
    width: 150px;
    height: 35px;
    border: none;
    border-radius: 3px;
    background-color: black;
    color: white;
  }
</style>
<div class="heder"><a href="index.php">Trang Chu</a> / Đăng Nhập </div>
<div class="header">
  <?php
  if (isset($_SESSION['user'])) {
    extract($_SESSION['user']);
  ?>
    <div>
      Xin chào <br>
      <?= $user ?>
    </div>
    <div class="wrap">
      <li>
        <a href="index.php?act=quenmk">Quên mật khẩu</a>
      </li>
      <li>
        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
      </li>

      <?php
      if($_SESSION['user']['role'] == 1){

      
      ?>
      <li>
        <a href="admin/index.php">Đăng nhập Admin</a>
      </li>
      <?php }?>
      <li>
        <a  href="index.php?act=thoat">Thoát</a>
      </li>
    </div>
  <?php
  } else {
  ?>

    <h2>Đăng Nhập</h2>
    <form action="index.php?act=dangnhap" method="post">
      <input type="text" name='user' placeholder="Nhập Tên Người Dùng..." class='ip'> <br> <br>

      <input type="password" name='password' placeholder='Nhập Password...' class='ip'> <br> <br>

      <input type="submit" value="Đăng Nhập" name='submit' class='bt'> <input type="reset" value="Nhập Lại" class='bt'>
      <?php
      if (isset($thongbao)) {
        echo $thongbao;
      }
      ?>
    </form>
    <div style='margin-left: 40px; color:white;'><a href="index.php?act=quenmatkhau">Quên Mật Khẩu ?</a></div>
    <div style='margin-left: 40px; '>Bạn chưa có tài khoản ? <a href="index.php?act=dangki" style='color:aqua;'>Đăng Kí</a></div>

</div>
<?php } ?>