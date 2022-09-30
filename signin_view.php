<?php   
session_start();
// neu ton tai cookie ghi nho thi truy van vao lay ma va ten luu lai vao session
if(isset($_COOKIE['ghi_nho'])){
    $token = $_COOKIE['ghi_nho'];
    require 'admin/connect.php';
    $sql = "select * from khach_hang
    where token = '$token'
    limit 1";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $number_rows = mysqli_num_rows($ket_qua);
    if($number_rows == 1){
        $each = mysqli_fetch_array($ket_qua);
        $_SESSION['ma'] = $each['ma'];
        $_SESSION['ten'] = $each['ten'];
    }
}


if(isset($_SESSION['ma'])){
    header('location:user.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng nhập</title>
    <style>
        #tong{
            width: 100%;
            height: 830px;
            background: black;
        }
        #tren{
            width: 100%;
            height: 20%;
            background: yellow;
        }
        #giua{
            width: 100%;
            height: 70%;
            background: pink;
        }
        #duoi{
            width: 100%;
            height: 10%;
            background: blueviolet;
        }
    </style>
</head>
<body>
    <div id="tong">
        <?php include 'menu.php'?>
        <?php include 'signin.php'?>
        <?php include 'footer.php'?>
    </div>
</body>
</html>