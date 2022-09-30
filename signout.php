<?php
session_start();
unset($_SESSION['ma']);
unset($_SESSION['ten']);

setcookie('ghi_nho',null,-1);
header('location:index.php');