
<style>
.container{
    width:1200px;
    height: 500px;
    border: 1px solid gray;
    margin-top: 100px;
    margin-left: 300px;
    border-radius: 10px ;

}
form{
    margin-top: 20px;
    margin-left: 20px;

}
.text{
    font-size: 25px;
    color: gray;
    margin-top: 20px;
    margin-left: 20px;

}
.p{
    width: 1000px;
    height: 40px;
    border:none;
    border-bottom: 1px solid white;
    background-color: transparent;
    transition: all 1s;
    color: white;


}
::placeholder{
    font-size: 21px;
}
.p:hover,
.p:active,
.p:focus{
    border-bottom: blue;
}
.m{
    width: 150px;
    height: 49px;
    background-color: white;
    color:black;
    border: none;
    border-radius: 3px;
    margin-left: 10px;
    margin-top: 20px;
    border-top-right-radius: 10px;
    border-bottom-left-radius: 10px;
    transition: all 1s;
} 
.m:hover{
    background-color: gray ;
    border: white;
    
}

</style>

<div class="container">
   <div class="text">
        UPDATE
   </div>
   <?php 
   if(isset($one)):?>
   
   <form action="index.php?act=updatedm" method="post">
        <input  class="p" type="text" name="id" placeholder="MA LOAI" value="<?php echo $one['id'] ?>"><br><br><br>
        <input class="p" type="text" name="name" placeholder="TEN DANH MUC" value="<?php echo $one['name'] ?>"><br><br><br>

        <input class="m" type="submit" name="sua" value="Sua"><input class="m" type="reset" value="NHAP LAI"><a href="index.php?act=listdm"><input class="m" type="submit" value="DANH SACH"></a>
   </form>
<?php endif ?>

</div>