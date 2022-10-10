<style>
    .tung_san_pham{
        width: 30%;
        height: 250px;
        border: 1px solid black;
        float: left;
        margin-left: 1.5%;
        margin-right: 1.5%;
        margin-bottom: 20px;
        margin-top: 20px;
    }
</style>
<?php
require 'admin/connect.php';
$sql ="select * from san_pham";
$ket_qua = mysqli_query($ket_noi,$sql);

?>
<div id="giua">
    <?php foreach($ket_qua as $each){ ?>
        <div class="tung_san_pham">
            <p><?php echo $each['ten'] ?></p>
            <img src="admin/san_pham/photo/<?php echo $each['anh']?>" alt="" height="100">
            
            <p><?php echo $each['gia'] ?> lit</p>
            <a href="view_san_pham.php?ma=<?php echo $each['ma']?>">xem thêm >>>>></a>
        </div>

    <?php  } ?>

</div>
<?php mysqli_close($ket_noi);
