<style>
        .container{
            margin-top: 100px;
            margin-left: 300px;
            width: 2000px;
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
      button{
        border: none;
        width: 50px;
        border-radius: 4px;
        transition: all 1s;
        color:black;
      }
      button:hover{
        background-color: gray;
        color: white;
      }
      .phantrang>span{
        display: inline-block;
        background-color: black;
        color: white;
        margin: 10px 10px 10px 10px;
        width: 30px;
        padding-left: 10px;
      }
      .phantrang{
       margin-left: 500px;
       margin-top: 100px;
       
      }
      
      
    </style>
    
    <div class='container'>
        <div class="text"> LIST SAN PHAM</div>
         <div class="col">
            <table>
                <tr>
                    <th>CHOSE</th>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SO LUONG</th>
                    <th>ANH</th>
                    <th>PRICE</th>
                    <th>MO TA</th>
                    <th>COLOR</th>
                    <th>IDDM</th>
                    <th>THAO TAC THUC HIEN</th>

                </tr>
            </table>
         </div>
         <div class="row">
            <?php if(isset($allsp)):
                foreach($allsp as $sp):
                
                ?>
         <table class='tb'>
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $sp['id'] ?></th>
                    <th><?php echo $sp['name'] ?></th>
                    <th><?php echo $sp['soluong'] ?></th>
                    <th><img src="../upload/<?php echo $sp['img'] ?>" width="100px" height="100px" ></th>
                    <th><?php echo $sp['price'] ?></th>
                    <th><?php echo $sp['mota'] ?></th>
                    <th><?php echo $sp['color'] ?></th>
                    <th><?php echo $sp['iddm'] ?></th>
                    <th><a href="index.php?act=suasp&id=<?php echo $sp['id'] ?>"><button>SUA</button></a> <a href="index.php?act=deletesp&id=<?php echo $sp['id'] ?>"><button onclick="return confirm('BẠN MUỐN XÓA DANH MỤC NÀY ?')">XÓA</button></a></th>

                </tr>
            </table>
            <?php endforeach ?>
            <?php endif  ?>




            <div class="phantrang">
            <?php
              $limit = 4;
              $allrecord = allrecordsp();
              foreach($allrecord as $record):
                $allpage = ceil($record[0] / $limit);
                for($i = 1; $i <$allpage; $i++):
                  
            ?>

            <span  style="background-color: <?php if($_GET['page'] == $i  ) {
              echo 'red';
            } ?> ;"><a href="index.php?act=listsp&page=<?php echo $i ?>"><?php echo $i ?></a></span>
            <?php
            endfor
            
            ?>
            <?php
            endforeach
            ?>
            </div>
         </div>
        
    </div>