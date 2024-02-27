<style>
    .header{
        border: 1px solid black;
        width: 1000px;
        height: 600px;
        margin-left: 400px;
        margin-top: 30px;
        padding: 10px 0 0 10px;
        margin-bottom: 30px;
        border-radius: 5px ;
        background-color: darkgrey;
    }
    .heder{
        width: 100%;
        height: 70px;
        background-color: beige;
        margin-top: 20px;
        padding-top: 27px;
        padding-left: 20px;
        font-size: 24px;
        font-weight: bold;
    }
    .ip{
        border: none;
        background-color: transparent;
        width: 800px;
        height: 35px;
        border-bottom: 2px solid purple;
    }
    form{
        margin-left: 40px;
    }
    .bt{
        width: 150px;
        height: 35px;
        border: none;
        border-radius: 3px;
        background-color: black;
        color: white ;
    }

</style>
<div class="heder"><a href="index.php">Trang Chu</a> / Đăng Nhập / Đăng Kí</div>
<div class="header">
  <h2>Đăng Kí</h2>
  <form action="index.php?act=dangki" method="post">
    <input type="text" name='user' placeholder="Nhập Tên Người Dùng..." class='ip'> <br> <br>
    <input type="password" name='password' placeholder='Nhập Password...' class='ip'> <br> <br>
    <input type="email" name='email' placeholder='Nhập Gmail ...' class='ip'><br> <br>
    <input type="number" name='sdt' placeholder='Nhập SĐT ...' class='ip'><br> <br>
    <input type="submit" value="Đăng Kí" name='dangki' class='bt'> <input type="reset" value="Nhập Lại" class='bt'>
    <?php if (!empty($errors)) : ?>
        <div style="color: red;">
            <?php foreach ($errors as $error) : ?>
                <?php echo $error . "<br>"; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Display success message -->
    <?php if (isset($thongbao) && ($thongbao != "")) : ?>
        <div style="color: green;">
            <?php echo $thongbao; ?>
        </div>
    <?php endif; ?>
  </form>
</div>