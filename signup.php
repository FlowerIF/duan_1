<div id="giua">
    
    <h1>form đăng ký </h1>
    <form action="process_signup.php" method="post">
        tên
        <input type="text" name="ten">
        <br>
        email
        <input type="text" name="email" id="">
        <br>
        mật khẩu
        <input type="text" name="mat_khau">
        <br>
        <button>đăng ký</button>
    </form>
    <?php
    session_start();
    if(isset($_SESSION['loi'])){
        echo $_SESSION['loi'];
        unset($_SESSION['loi']);
    }
    ?>
</div>