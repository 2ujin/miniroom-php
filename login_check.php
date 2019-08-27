<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  session_start();

  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $id = $_GET['id'];
  $pw = $_GET['pw'];

  $query = "select * from user_tbl where id='$id'";
  $result = $conn->query($query)

  if($result){
    ?>
  <?php alert("헬로우~");
  }
 ?>
