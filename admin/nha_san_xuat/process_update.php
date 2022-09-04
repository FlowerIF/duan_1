<?php
if( empty($_POST['ma']) ){
    header("location:index.php?loi=Phải truyền mã để sửa");
    exit;
}
$ma = $_POST['ma'];
if( empty($_POST['ten']) || empty($_POST['dia_chi']) || empty($_POST['sdt']) || empty($_POST['anh']) ){
    header("location:form_update.php?ma=$ma&loi=Phải điền đầy đủ thông tin");
    exit;
}

$ten = $_POST['ten'];
$dia_chi = $_POST['dia_chi'];
$sdt = $_POST['sdt'];
$anh = $_POST['anh'];

require '../connect.php';

$sql = "update nha_san_xuat
set
ten ='$ten',
dia_chi ='$dia_chi',
sdt ='$sdt',
anh ='$anh'
where
ma ='$ma'
";

mysqli_query($ket_noi,$sql);
$error = mysqli_error($ket_noi);
mysqli_close($ket_noi);

if(empty($error)){
    header('location:index.php?success= Sửa thành công');
}else{
    header("location:form_update.php?ma=$ma&loi=lỗi truy vấn");
}