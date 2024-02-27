<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 1200px;
            height: 500px auto;
            
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
      .tb{
        margin-left: 29px;
      }
      .bieudo{
        width: 150px;
        height: 50px;
        border: 1px solid red;
        border-radius: 5px;
        font-size: 22px;
        color:black;
      }
      button:hover{
        background-color: gray;
        color: white;
      }

    </style>
    
    <div class='container'>
        <div class="text"> THONG KE</div>
         <div class="col">
            <table>
                <tr>
                    <th>CLICK</th>
                    <th>LOAI HANG</th>
                    <th>SO LUONG</th>
                    <th>GIA CAO NHAT</th>
                    <th>GIA THAP NHAT</th>
                    <th>GIA TRUNG BINH</th>
                </tr>
            
         </div>
         <div class="row">
            
         
         <?php if(isset($thongke)):
                foreach($thongke as $dm):
                
                ?>
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $dm['name']  ?></th>
                    <th><?php echo $dm['soluong'] ?></th>
                    <th><?php echo $dm['maxprice'] ?></th>
                    <th><?php echo $dm['minprice'] ?></th>
                    <th><?php echo $dm['tbprice'] ?></th>
                    

                </tr>
                <?php endforeach ?>
            <?php endif  ?>
            </table>

           <a href="index.php?act=bieudo">
            <button class="bieudo">bieu do</button>
           </a>
         </div>
         
    </div>