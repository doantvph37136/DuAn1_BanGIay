<?php
function  addsanpham($name,$soluong,$price,$color,$mota,$target_file,$target_file1,$target_file2,$target_file3,$iddm){
    $sql= "INSERT INTO sanpham(name,soluong,price,color,mota,img,img1,img2,img3,iddm) VALUE('$name','$soluong','$price','$color','$mota','$target_file','$target_file1','$target_file2','$target_file3','$iddm')";
    pdo_execute($sql);
}
/*function addsanpham($name,$soluong,$target_file,$price,$mota,$color,$iddm){
    $sql= "INSERT INTO sanpham(name,soluong,img,price,mota,color,iddm) VALUE('$name','$soluong','$target_file','$price','$mota','$color','$iddm')";
    pdo_execute($sql);
}*/
function listsanpham(){
    $sql= "SELECT * FROM sanpham";
    $listsp = pdo_query($sql);
    return $listsp;
}

function deletesp_byid($id){
    $sql = 'DELETE FROM sanpham WHERE id='.$id;
    pdo_execute($sql);
}

function updatesp($id,$name,$soluong,$target_file,$target_file1,$target_file2,$target_file3,$price,$pricekm,$mota,$color,$iddm,){
    $sql= "UPDATE sanpham SET name='".$name."',soluong='".$soluong."',img='".$target_file."',img1='".$target_file1."',img2='".$target_file2."',img3='".$target_file3."',price='".$price."',pricekm='".$pricekm."',mota='".$mota."',color='".$color."',iddm='".$iddm."'WHERE id=".$id;
    pdo_execute($sql);
}
function loadallsp($id){
    $sql= "SELECT * FROM sanpham WHERE id=".$id;
    $onesp = pdo_query_one($sql);
    return $onesp;
}
function tonghanghoa(){
    $sql= "SELECT sanpham.soluong FROM sanpham";
    $soluong = pdo_query($sql);
    return $soluong;
}
function loadall_sanpham_home(){
    $sql= "SELECT * fROM sanpham WHERE 1 order by id desc limit 0,5";
    $sanphamhome = pdo_query($sql);
    return $sanphamhome;
}

function loadall_sanpham_home2(){
    $sql= "SELECT * fROM sanpham WHERE 1 order by id desc limit 10";
    $sanphamhome = pdo_query($sql);
    return $sanphamhome;

}
function loadall_sanphamsell(){
    $sql= "SELECT * fROM sanpham WHERE 1 order by pricekm asc limit 5";
    $sanphamhome = pdo_query($sql);
    return $sanphamhome;

}
function seachsp($iddm,$kyw){
    $sql= "SELECT * FROM sanpham where 1";
    if(!$kyw== ""){
        $sql.=" AND sanpham.name like '%".$kyw."%'";
    }
    if($iddm >0){
        $sql.= " AND iddm = '".$iddm."'";
    }
    $sql.= " order by id desc limit 20 ";
    $seach=pdo_query($sql);
    return $seach;
}
function sanphamct($id){
    $sql= "SELECT * FROM sanpham where id=$id";
    $id = pdo_query_one($sql);
    return $id;
}
function resultsp_gh($limit,$rand){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT $limit,$rand";
    $results = pdo_query($sql);
    return $results;
}
function sanphampage($limit, $start){
    $sql= "SELECT * FROM sanpham order by id desc limit $start,$limit";
    $page = pdo_query($sql);
    return $page;
}
function allrecordsp(){
    $sql= "SELECT count(sanpham.id) FROM sanpham";
    $sppage = pdo_query($sql);
    return $sppage;
}
?>