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
    </style>
    
    <div class='container'>
        <div class="text"> DANH MUC</div>
         <div class="col">
            <table>
                <tr>
                    <th>CLICK</th>
                    <th>MA LOAI</th>
                    <th>TEN DANH MUC</th>
                    <th>THAO TAC THUC HIEN</th>

                </tr>
            
         </div>
         <div class="row">
            <?php if(isset($listdm)):
                foreach($listdm as $dm):
                
                ?>
         
                <tr>
                    <th><input type="checkbox" name="checkbox" id=""></th>
                    <th><?php echo $dm['id'] ?></th>
                    <th><?php echo $dm['name'] ?></th>
                    <th><a href="index.php?act=suadm&id=<?php echo $dm['id'] ?>"><button>SUA</button></a> <a href="index.php?act=deletedm&id=<?php echo $dm['id'] ?>"><button onclick="return confirm('BẠN MUỐN XÓA DANH MỤC NÀY ?')">XÓA</button></a></th>

                </tr>
                <?php endforeach ?>
            <?php endif  ?>
         
            </table>
            </div>
         
    </div>