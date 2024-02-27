<?php 
function loadtaikhoan(){
    $sql ="SELECT * FROM taikhoan";
    $taikhoan = pdo_query($sql);
    return $taikhoan;
}
function sigin($user,$email,$pass,$sdt){
    $sql = "INSERT INTO taikhoan(user,gmail,password,sdt) value('$user','$email','$pass','$sdt')";
    pdo_execute($sql);
}
function check_login($user,$pass){
    $sql ="select * from taikhoan where user='".$user."' and password='".$pass."'";
    $check = pdo_query_one($sql);
    return $check;
}

?>