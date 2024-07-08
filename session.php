<?php 
session_start();
$_SESSION['Apache'] = 1;
echo $_SESSION['Apache'];
unset($_SESSION['Apache']);
session_destroy();
?>