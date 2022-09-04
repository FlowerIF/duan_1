<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <?php 
        require '../connect.php' ;
        require '../menu.php' ;
        $sql = "select * from nha_san_xuat";
        $ket_qua = mysqli_query($ket_noi,$sql);

    ?>
    <form action="process_insert.php" method="post" enctype="multipart/form-data" >
        Tên
        <input type="text" name="ten" id="">
        <br>
        Ảnh
        <input type="file" name="anh" id="">
        <br>
        Giá
        <input type="text" name="gia">
        <br>
        Mô tả
        <textarea name="mo_ta" id="" cols="30" rows="10"></textarea>
        <br>
        Nhà sản xuất
        <select name="ma_nha_san_xuat" id="">
            <?php foreach($ket_qua as $each){?>
                <option value="<?php echo $each['ma']?>"><?php echo $each['ten']?></option>
         <?php   }?>
        </select>
        <br>
        <button>Thêm</button>
    </form>
    <?php mysqli_close($ket_noi);?>
</body>
</html>