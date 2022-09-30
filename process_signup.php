<?php
$ten = $_POST['ten'];
$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

require 'admin/connect.php';
//kiem tra email xem co trung khong

$sql = "select count(*) from khach_hang
where email='$email'";
$ket_qua = mysqli_query($ket_noi,$sql);
$so_trung = mysqli_fetch_array($ket_qua)['count(*)'];

if($so_trung == 1){
    session_start();
    $_SESSION['loi'] = 'trùng email rồi , bạn kiểm tra lại đi';
    header('location:signup_view.php');
    exit;
}



$sql = "insert into khach_hang(ten,email,mat_khau)
values('$ten','$email','$mat_khau')";
$ket_qua = mysqli_query($ket_noi,$sql);



// // sử dụng session 
// $sql = "select ma from khach_hang
// where email='$email'";
// $ket_qua = mysqli_query($ket_noi,$sql);
// $ma = mysqli_fetch_array($ket_qua)['ma'];
// session_start();
// $_SESSION['ma'] = $ma;
// $_SESSION['ten'] = $ten;
// //

mysqli_close($ket_noi);

header('location:signup_view.php');