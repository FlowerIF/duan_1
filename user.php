<?php
session_start();
if(empty($_SESSION['ma'])){
    header('location:signin_view.php?loi=đăng nhập đi bạn');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    xin chào bạn 
    <?php
    echo $_SESSION['ten'];
    ?>
    <a href="index.php">đăng xuất khỏi trái đất luôn</a>
</body>
</html>