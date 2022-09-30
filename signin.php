<div id="giua">
    <?php
    
    if(isset($_SESSION['loi'])){
        echo $_SESSION['loi'];
        unset($_SESSION['loi']);
    }

    ?>
    <h1>đăng nhập</h1>
    <form action="process_signin.php" method="post">
        email
        <input type="email" name="email" id="">
        <br>
        mật khẩu
        <input type="text" name="mat_khau">
        <button>đăng nhập</button>
        <br>
        <input type="checkbox" name="ghi_nho" id="">
        ghi nhớ tôi
    </form>
</div>