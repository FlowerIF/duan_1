<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bài đăng</title>
</head>
<body>
   

    <?php
    if(empty($_GET['ma'])){
        header('location:index.php?loi=Phải truyền mã để sửa');
        exit;
    }
    $ma = $_GET['ma'];

    require '../menu.php';
    require '../connect.php';
    
    $sql = "select * from nha_san_xuat
    where ma = '$ma'";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $nha_san_xuat = mysqli_fetch_array($ket_qua);// lấy thg đầu tiên
    ?>

    <form action="process_update.php" method="post">
        <input type="hidden" name="ma" value="<?php echo $nha_san_xuat['ma']?>">
    tên
        <input type="text" name="ten" value="<?php echo $nha_san_xuat['ten']?>">
        <br>
        địa chỉ 
        <input type="text" name="dia_chi" value="<?php echo $nha_san_xuat['dia_chi']?>">
        <br>
        số điện thoại
        <input type="text" name="sdt" value="<?php echo $nha_san_xuat['sdt']?>">
        <br>
        ảnh
        <input type="text" name="anh" value="<?php echo $nha_san_xuat['anh']?>">
        <br>
        <button>Sửa</button>
    </form>
    <?php mysqli_close($ket_noi); ?>
</body>
</html>