<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 1500px;
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
     /* .container {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      } */
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
        <div class="text">THEM SAN PHAM</div>
       
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <select name="iddm" >
                <?php
                $listdm = listdanhmuc();
                 foreach($listdm as $dm): ?>
                <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
                <?php endforeach ?>
            </select> <br> <br>
            
            <input type="text" name="id" placeholder="MA LOAI" class='ip'> <br> <br>
            <input type="text" name="name" placeholder="TEN SAN PHAM" class='ip'> <br> <br>
            <input type="number" name="soluong" placeholder="SO LUONG" class='ip'> <br> <br>
            <input type="text" name="price" placeholder="GIA" class='ip'> <br> <br>
            <input type="text" name="pricekm" placeholder="GIA KM" class="ip"><br><br>
            <input type="text" name="color" placeholder="MAU SAC" class='ip'> <br> <br>
            <textarea name="mota" id=" cols="30" rows="10"></textarea><br> <br>

            <div class="button-wrap">
             <label class="button" for="upload">Upload File</label>
             <input id="upload" type="file" name='file_img'>
           </div> <br> <br>

           <div class="button-wrap">
             <label class="button" for="upload1">Upload File</label>
             <input id="upload1" type="file" name='file_img1'>
           </div> <br> <br>

           <div class="button-wrap">
             <label class="button" for="upload2">Upload File</label>
             <input id="upload2" type="file" name='file_img2'>
           </div> <br> <br>

           <div class="button-wrap">
             <label class="button" for="upload3">Upload File</label>
             <input id="upload3" type="file" name='file_img3'>
           </div> <br> <br>
            <input type="submit" value="THEM" name='themmoi' class='bt'> <input type="reset" value="NHAP LAI"  class='bt'> <a href="index.php?act=listsp"><input type="button" value='DANH SACH'  class='bt'></a>
        </form>
   
    </div>