<?php

require '../connect.php';

$ma = $_GET['ma'];

$sql = "delete from san_pham
where
ma='$ma'";

mysqli_query($ket_noi,$sql);
mysqli_close($ket_noi);
header('location:index.php');