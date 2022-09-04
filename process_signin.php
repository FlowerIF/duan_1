<?php
session_start();
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

require 'admin/connect.php';
//kiem tra email xem co trung khong

$sql = "select * from khach_hang
where email='$email' and mat_khau='$mat_khau'";
//xem co ban ghi nao trung email va pass hay khogn


$ket_qua = mysqli_query($ket_noi,$sql);
$so_trung = mysqli_num_rows($ket_qua);// dem xem co bao nhieu ban ghi

if($so_trung == 1){
    session_start();
    $each = mysqli_fetch_array($ket_qua);
    $_SESSION['ma'] = $each['ma'];
    $_SESSION['ten'] = $each['ten'];
    header('location:user.php');
    exit;
}
header('location:signin_view.php?loi=đăng nhập sai rồi');