<?php

require '../connect.php';
$ma = $_GET['ma'];
$sql = "delete from nha_san_xuat
where 
ma = '$ma'";
mysqli_query($ket_noi,$sql);
mysqli_close($ket_noi);
header('location:index.php?success= Xóa thành công');