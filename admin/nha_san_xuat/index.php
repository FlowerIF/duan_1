<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhà sản xuất</title>
</head>
<body>
    
    <?php 
    include '../menu.php';
    require '../connect.php';

    $sql = "select * from nha_san_xuat";
    $ket_qua = mysqli_query($ket_noi,$sql);


?>
<a href="form_insert.php">Thêm</a>
<table border="1" width="100%">
        <tr>
            <th>mã</th>
            <th>tên</th>
            <th>địa chỉ</th>
            <th>số điện thoại</th>
            <th>ảnh</th>
            <th>sửa</th>
            <th>xóa</th>
        </tr>
    <?php foreach($ket_qua as $each){ ?>
        <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td><?php echo $each['dia_chi'] ?></td>
            <td><?php echo $each['sdt'] ?></td>
            <td><img width="200" src="<?php echo $each['anh'] ?>" alt=""></td>
            <td><a href="form_update.php?ma=<?php echo $each['ma'] ?>">sửa</a></td>
            <td><a href="delete.php?ma=<?php echo $each['ma'] ?>">xóa</a></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>