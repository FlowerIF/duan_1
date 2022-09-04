<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <?php
        $ma = $_GET['ma'];
        require '../connect.php' ;
        require '../menu.php' ;
        $sql = "select * from nha_san_xuat";
        $ket_qua = mysqli_query($ket_noi,$sql);
        

        $sql = "select * from san_pham
        where
        ma='$ma'";
        $ket_qua_sp = mysqli_query($ket_noi,$sql);
        $san_pham = mysqli_fetch_array($ket_qua_sp);

    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="ma" value="<?php echo $san_pham['ma']?>">
        Tên
        <input type="text" name="ten" value="<?php echo $san_pham['ten'] ?>">
        <br>
        Ảnh cũ
        <img src="photo/<?php echo $san_pham['anh'] ?>" alt="" height="100">
        <input type="hidden" name="anh_old" value="<?php echo $san_pham['anh'] ?>">
        <br>
        Ảnh Mới
        <input type="file" name="anh_moi" id="">
        <br>
        
        Giá
        <input type="text" name="gia" value="<?php echo $san_pham['gia'] ?>">
        <br>
        Mô tả
        <textarea name="mo_ta" id="" cols="30" rows="10"><?php echo $san_pham['mo_ta'] ?></textarea>
        <br>
        Nhà sản xuất
        <select name="ma_nha_san_xuat" >
            <?php foreach($ket_qua as $each){?>
                <option 
                value="<?php echo $each['ma']?>"
                <?php if($san_pham['ma_nha_san_xuat'] == $each['ma']){?>
                    selected
                    <?php } ?>
                    >
                <?php echo $each['ten']?></option>
         <?php   }?>
        </select>
        <br>
        <button>Sửa</button>
    </form>
    <?php mysqli_close($ket_noi);?>
</body>
</html>