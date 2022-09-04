
<?php
$ma = $_GET['ma'];
require 'admin/connect.php';
$sql ="select * from san_pham
where ma='$ma'";
$ket_qua = mysqli_query($ket_noi,$sql);
$san_pham = mysqli_fetch_array($ket_qua);
?>
<div id="giua">
        <p><?php echo $san_pham['ten'] ?></p>
        <img src="admin/san_pham/photo/<?php echo $san_pham['anh']?>" alt="" height="300">
        <p><?php echo $san_pham['gia'] ?> lit</p>
        <p><?php echo $san_pham['mo_ta'] ?></p>
        
</div>

<?php mysqli_close($ket_noi);