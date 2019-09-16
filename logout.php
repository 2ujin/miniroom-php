<?php

session_start(); // 세션

if($_SESSION['id']!=null){
   session_destroy();
}

echo "<script>location.href='login.php';</script>";

?>
