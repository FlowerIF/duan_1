<?php
session_start();
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

if(isset($_POST['ghi_nho'])){
    $ghi_nho = true;
}else{
    $ghi_nho = false;
}



require 'admin/connect.php';
//kiem tra email xem co trung khong

$sql = "select * from khach_hang
where email='$email' and mat_khau='$mat_khau'";
//xem co ban ghi nao trung email va pass hay khogn


$ket_qua = mysqli_query($ket_noi,$sql);
$so_trung = mysqli_num_rows($ket_qua);// dem xem co bao nhieu ban ghi

if($so_trung == 1){
    
    $each = mysqli_fetch_array($ket_qua);
    $ma = $each['ma'];
    $_SESSION['ma'] = $ma;
    $_SESSION['ten'] = $each['ten'];
    if($ghi_nho){
        // sinh ra token
        $token = uniqid('user_' . time(),true);
        $sql = "update khach_hang
        set
        token ='$token'
        where ma = '$ma'";
        $ket_qua = mysqli_query($ket_noi,$sql);
        setcookie('ghi_nho',$token,time() + 60*60*24*30);
    }
    // header('location:user.php');
    // exit;
    echo 'dang nhap thanh cong';
}else{
    // header('location:signin_view.php');
    // $_SESSION['loi'] = 'Đăng nhập sai rồi';
    echo 'dang nhap sai r';
}
