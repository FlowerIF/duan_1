<?php
$ma = $_POST['ma'];
require '../connect.php' ;
$ten = $_POST['ten'];
$anh_moi = $_FILES['anh_moi'];// truyền file ảnh lên 
if($anh_moi['size'] > 0){
    // load anh
    $folder = 'photo/';
    // $part_file = $folder . basename($anh["name"]);// lấy tên file

    $file_extension = explode('.',$anh_moi["name"])[1];// tach ten file anh ra,lấy sau dấu chấm vd a.png thi lay png
    $file_name = time() . '.' . $file_extension;// doi ten file theo thoi gian
    $part_file = $folder . $file_name;
    move_uploaded_file($anh_moi["tmp_name"],$part_file);
    //
}else{
    $file_name = $_POST['anh_old'];
}

$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];




$sql = "update san_pham
set
ten='$ten',
anh='$file_name',
gia='$gia',
ma_nha_san_xuat='$ma_nha_san_xuat',
mo_ta='$mo_ta'
where
ma='$ma'

";

$ket_qua = mysqli_query($ket_noi,$sql);
mysqli_close($ket_noi);
header('location:index.php');