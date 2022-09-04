<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài đăng</title>
</head>
<body>
    
    <?php 
    require '../connect.php';
    require '../menu.php';
    ?>
    <form action="process_insert.php" method="post">
        tên
        <input type="text" name="ten">
        <br>
        địa chỉ 
        <input type="text" name="dia_chi">
        <br>
        số điện thoại
        <input type="text" name="sdt">
        <br>
        ảnh
        <input type="text" name="anh" id="">
        <br>
        <button>Thêm</button>
    </form>
    <?php mysqli_close($ket_noi); ?>
</body>
</html>