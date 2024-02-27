<?php
session_start();
if($_SESSION['user']['role'] == 0 ){
    header('location:gggg.php');
}
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/taikhoan.php");
include("../model/hoadon.php");
include('header.php');
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm':
            if(isset($_POST['themmoi'])){
                $name = $_POST['name'];
                adddanhmuc($name);
                $thongbao = 'Them thanh cong danh muc:'.$name;
            }
           include('./danhmuc/add.php');
            break;

        case 'listdm':
            $listdm = listdanhmuc();
            include('./danhmuc/list.php');
            break;
        case 'deletedm':
           if(isset($_GET['id'])){
            $id = $_GET['id'];
            deletedm_byid($id);
           }
           $listdm = listdanhmuc();
           include('./danhmuc/list.php');
        case 'suadm':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $one = loadall($id);
                
            }
            include('./danhmuc/update.php');
            break;

        case 'updatedm':
            if(isset($_POST['sua'])){
                $name = $_POST['name'];
                $id = $_POST['id'];
                updatedm($id,$name);
                $thongbao = 'Update thanh cong danh muc:'.$name;
            }
            $listdm = listdanhmuc();
            include('./danhmuc/list.php');
            break;

            case 'addsp':
                if(isset($_POST['themmoi'])){
                    $name = $_POST['name'];
                    $soluong = $_POST['soluong'];
                    $price = $_POST['price'];
                    $color = $_POST['color'];
                    $mota = $_POST['mota'];
                    $target_dir = '../upload/';
                    $rand = rand(1,100);
                    $name_file = $_FILES['file_img']['name'];
                    $target_file = $target_dir.'_'.$rand.'_'.$name_file;
                    move_uploaded_file($_FILES['file_img']['tmp_name'],$target_file);

                    $name_file1 = $_FILES['file_img1']['name'];
                    $target_file1 = $target_dir.'_'.$rand.'_'.$name_file1;
                    move_uploaded_file($_FILES['file_img1']['tmp_name'],$target_file1);


                    $name_file2 = $_FILES['file_img2']['name'];
                    $target_file2 = $target_dir.'_'.$rand.'_'.$name_file2;
                    move_uploaded_file($_FILES['file_img2']['tmp_name'],$target_file2);

                    $name_file3 = $_FILES['file_img3']['name'];
                    $target_file3 = $target_dir.'_'.$rand.'_'.$name_file3;
                    move_uploaded_file($_FILES['file_img3']['tmp_name'],$target_file3);
                    $iddm = $_POST['iddm'];


    
                    addsanpham($name,$soluong,$price,$color,$mota,$target_file,$target_file1,$target_file2,$target_file3,$iddm);
                    $notify = 'Thêm Thành Công Sản Phẩm :_'.$name.'_!';
                }
                include('./sanpham/add.php');
                break;
    

                


                

            case'listsp':
                $limit = 4;
                if(isset($_GET['page'])){
                    $page = ($_GET['page']);
                }else{
                    $page = 1;
                }
                $start = ($page - 1) * $limit;
                $allsp = sanphampage($limit, $start);
                include('./sanpham/list.php');
                break;
                case 'deletesp':
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        deletesp_byid($id);
                    }
                    $listsp = listsanpham();
           include('./sanpham/list.php');
        case 'suasp':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $one = loadallsp($id);
                
            }
            
            include('./sanpham/update.php');
            break;


            case 'listthongke':
                $thongke=  thongke();
                   
                
                include('./thongke/listthongke.php');

                break;

                case 'bieudo':
                    
                       
                    
                    include('./thongke/bieudo.php');
    
                    break;
                
                    case 'giohang':
                        $limit =3;
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }else{
                            $page = 1;
                        }
                        $start = ($page - 1) * $limit;
                        $selectgiohang = select_all_donhang($start,$limit);
                        $trangThaiDonHang = loadAllTT();
                        if(isset($_POST['capnhat'])){
                            $id = $_POST['id'];
                            $trangthai = $_POST['trangthai'];
                            
                            updateTrangThai($id,$trangthai);
                            $limit =3;
                            if(isset($_GET['page'])){
                                $page = $_GET['page'];
                            }else{
                                $page = 1;
                            }
                            $start = ($page - 1) * $limit;
                            $selectgiohang = select_all_donhang($start,$limit);
                        }
                        include('./quanligiohang/danhmucgiohang.php');
                        break;


            case 'updatesp':
                if(isset($_POST['sua'])){
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $soluong = $_POST['soluong'];
                    $price = $_POST['price'];
                    $pricekm = $_POST['pricekm'];
                    $color = $_POST['color'];
                    $mota = $_POST['mota'];
                    $size = $_FILES['file_img']['size'];
                    $target_file = $_POST['file_img'];
                    if($size>0){
                        $target_dir = '../upload/';
                    $name_file = $_FILES['file_img']['name'];
                    $rand = rand(1,100);
                    $target_file = $target_dir.'_'.$rand.'_'.$name_file;
                    move_uploaded_file($_FILES['file_img']['tmp_name'],$target_file);
                    }


                    $size1 = $_FILES['file_img1']['size'];
                    $target_file1 = $_POST['file_img1'];
                    if($size1>0){
                        $target_dir = '../upload/';
                    $name_file1 = $_FILES['file_img1']['name'];
                    $rand = rand(1,100);
                    $target_file1 = $target_dir.'_'.$rand.'_'.$name_file1;
                    move_uploaded_file($_FILES['file_img1']['tmp_name'],$target_file1);
                    }


                    $size2 = $_FILES['file_img2']['size'];
                    $target_file2 = $_POST['file_img2'];
                    if($size2>0){
                        $target_dir = '../upload/';
                    $name_file2 = $_FILES['file_img2']['name'];
                    $rand = rand(1,100);
                    $target_file2 = $target_dir.'_'.$rand.'_'.$name_file2;
                    move_uploaded_file($_FILES['file_img2']['tmp_name'],$target_file2);
                    }

                    $size3 = $_FILES['file_img3']['size'];
                    $target_file3 = $_POST['file_img3'];
                    if($size3>0){
                        $target_dir = '../upload/';
                    $name_file3 = $_FILES['file_img3']['name'];
                    $rand = rand(1,100);
                    $target_file3 = $target_dir.'_'.$rand.'_'.$name_file3;
                    move_uploaded_file($_FILES['file_img3']['tmp_name'],$target_file3);
                    }
                    
                    $iddm = $_POST['iddm'];
    
                    updatesp($id,$name,$soluong,$target_file,$target_file1,$target_file2,$target_file3,$price,$pricekm,$mota,$color,$iddm);
                    $notify = 'Thêm Thành Công Sản Phẩm :_'.$name.'_!';
                    
                }
                $listsp = listsanpham();
                include('./sanpham/update.php');
                break;
            case '/':
                include('home.php');
                break;

            



        default:
            include('home.php');
    }
 }else{
    include('home.php');
 }

 include('footer.php');
?>