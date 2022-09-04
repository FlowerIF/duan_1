<?php

if(empty($_POST['ten']) || empty($_POST['dia_chi']) || empty($_POST['sdt']) || empty($_POST['anh']) ){
    header('location:form_insert.php?loi=Phải điền đầy đủ thông tin');
    exit;
}

$ten = $_POST['ten'];
$dia_chi = $_POST['dia_chi'];
$sdt = $_POST['sdt'];
$anh = $_POST['anh'];

require '../connect.php';

$sql = "insert into nha_san_xuat(ten,dia_chi,sdt,anh)
values ('$ten','$dia_chi','$sdt','$anh')";

mysqli_query($ket_noi,$sql);

mysqli_close($ket_noi);
header('location:index.php?success= Thêm thành công');