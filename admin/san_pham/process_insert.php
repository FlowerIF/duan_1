<?php
require '../connect.php' ;
$ten = $_POST['ten'];
$anh = $_FILES['anh'];// truyền file ảnh lên 
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$ma_nha_san_xuat = $_POST['ma_nha_san_xuat'];


// load anh
$folder = 'photo/';
// $part_file = $folder . basename($anh["name"]);// lấy tên file

$file_extension = explode('.',$anh["name"])[1];// tach ten file anh ra,lấy sau dấu chấm vd a.png thi lay png
$file_name =  time() . '.' . $file_extension;// doi ten file theo thoi gian
$part_file = $folder . $file_name;
move_uploaded_file($anh["tmp_name"],$part_file);
//

$sql = "insert into san_pham(ten,anh,gia,ma_nha_san_xuat,mo_ta)
values('$ten','$file_name','$gia','$ma_nha_san_xuat','$mo_ta')";

$ket_qua = mysqli_query($ket_noi,$sql);
mysqli_close($ket_noi);
header('location:index.php');