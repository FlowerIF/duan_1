<div id="giua">
    <?php
    if(isset($_GET['loi'])){
        echo $_GET['loi'];
    }
    ?>
    <h1>đăng nhập</h1>
    <form action="process_signin.php" method="post">
        email
        <input type="email" name="email" id="">
        <br>
        mật khẩu
        <input type="password" name="mat_khau">
        <button>đăng nhập</button>
    </form>
</div>