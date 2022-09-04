<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
</head>
<body>
    <?php 
        require '../connect.php' ;
        require '../menu.php';
        $sql = "select 
        san_pham.*,
        nha_san_xuat.ten as ten_nsx
        from san_pham
        join nha_san_xuat on san_pham.ma_nha_san_xuat = nha_san_xuat.ma";
        // lấy tất cả các cột của sản phẩm, lấy thêm cột tên nsx đổi thành ten_nsx
        $ket_qua = mysqli_query($ket_noi,$sql);

        


        

    ?>
    <h1>Quản lý sản phẩm</h1>
    <a href="form_insert.php">thêm sản phẩm</a>
    <table border="1" width='100%'>
        <tr>
            <th>mã</th>
            <th>tên</th>
            <th>ảnh</th>
            <th>giá</th>
            <th>tên nhà sx</th>
            <th>Sửa</th>
            <th>Xóa</th>

            
        </tr>
        <?php foreach($ket_qua as $each){ ?>
            <tr>
                <td><?php echo $each['ma']?></td>
                <td><?php echo $each['ten']?></td>
                <td>
                    <img height="200" src="photo/<?php echo $each['anh']?>" alt="">
                </td>
                <td><?php echo $each['gia']?></td>
                <td>
                <?php echo $each['ten_nsx']?>
                </td>
                <td><a href="form_update.php?ma=<?php echo $each['ma']?>">Sửa</a></td>
                <td><a href="delete.php?ma=<?php echo $each['ma']?>">Xóa</a></td>
            </tr>
       <?php } ?>
    </table>
    <?php mysqli_close($ket_noi);?>
</body>
</html>