<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 1600px;
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
        }
        .text{
            font-size: 25px;
            margin-top: 20px;
            margin-left: 20px;
        }
        form{
            margin-top: 20px;
            margin-left: 20px;
        }
        label{
            font-size: 21px;
        }
        .ip{
            width: 1000px;
            height: 40px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid white;
            color: white;
            transition: 1s ease;
        }
        ::placeholder{
            font-size: 21px;
        }
      .ip:hover,
      .ip:focus,
      .ip:active{
       border-bottom: purple;
       

      }
      .bt{
        width: 150px;
        height: 40px;
        background-color: aliceblue;
        border: none;
        border-radius: 3px;
        margin-left: 10px;
        margin-top: 20px;
        border-top-right-radius:10px;
        border-bottom-left-radius:10px;
        transition: all 1s;
      }
      

     .bt:hover{
        background-color: gray;
        color: white;
     }
     input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: gray;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 12px 18px;
        cursor: pointer;
        border-radius: 5px;
        background-color: #8ebf42;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        transition: all 1s;
      }
      .button:hover{
        background-color: red;
      }
      select{
        width: 200px;
        height: 30px;
        background-color: transparent;
        margin-left: 400px;
        color: white;
        border: 1px solid white;
        border-radius: 4px;
        font-size: 20px;
      }
      option{
        background-color:gray;
      }
    </style>
    
    <div class='container'>
        <div class="text">UPDATE SP</div>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <?php if(isset($one)) :
          ?>
              <select name="iddm" >
                <?php
                $listdm = listdanhmuc();
                 foreach($listdm as $dm): ?>
                <option value="<?php echo $dm['id'] ?>"
                <?php echo($one['iddm'] == $dm['id']) ? 'selected' : '' ?>><?php echo $dm['name'] ?></option>
                <?php endforeach ?>
            </select> <br> <br>
            <input type="text" name="id" placeholder="MA LOAI" class='ip' value="<?php echo $one['id'] ?>" > <br> <br>
            <input type="text" name="name" placeholder="TEN SAN PHAM" class='ip' value="<?php echo $one['name'] ?>"> <br> <br>
            <input type="number" name="soluong" placeholder="SO LUONG" class='ip' value="<?php echo $one['soluong'] ?>"> <br> <br>
            <input type="text" name="price" placeholder="GIA" class='ip' value="<?php echo $one['price'] ?>"> <br> <br>
            <input type="text" name="pricekm" placeholder="GIA KM" class="ip" value="<?php echo $one['pricekm'] ?>"><br><br>
            <input type="text" name="color" placeholder="MAU SAC" class='ip' value="<?php echo $one['color'] ?>"> <br> <br>
            <textarea name="mota" id="mota" cols="30" rows="10"></textarea><br> <br>
            <input type="hidden" name="file_img" value="<?php echo $one['img'] ?>">
            <input type="hidden" name="file_img1" value="<?php echo $one['img1'] ?>">
            <input type="hidden" name="file_img2" value="<?php echo $one['img2'] ?>">
            <input type="hidden" name="file_img3" value="<?php echo $one['img3'] ?>">
            <div class="button-wrap">
             <label class="button" for="upload">Upload File</label>
             <input id="upload" type="file" name='file_img'>  
           </div> <br> 
           <div class="button-wrap">
             <label class="button" for="upload1">Upload File</label>
             <input id="upload1" type="file" name='file_img1'>  
           </div> <br> 
           <div class="button-wrap">
             <label class="button" for="upload2">Upload File</label>
             <input id="upload2" type="file" name='file_img2'>  
           </div> <br> 
           <div class="button-wrap">
             <label class="button" for="upload3">Upload File</label>
             <input id="upload3" type="file" name='file_img3'>  
           </div> <br> 
           <img src="../upload/<?php echo $one['img'] ?>" alt="" width="120px" height='100px'> <br>
            
            <input type="submit" value="UPDATE" name='sua' class='bt'> <input type="reset" value="NHAP LAI"  class='bt'> <a href="index.php?act=listsp"><input type="submit" value='DANH SACH'  class='bt'></a>
        </form>
      
       
        <?php endif ?>
    </div>