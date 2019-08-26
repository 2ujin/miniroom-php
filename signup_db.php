<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'MINIROOM';
  $password = '1234';
  $database = "localhost/xe";

  $c = oci_connect($username, $password, $database,  'AL32UTF8');

  $name = $_GET['name'];
  $nickname = $_GET['nickname'];
  $id = $_GET['id'];
  $password = md5($_GET['pw']);

  $sql = "INSERT INTO USER_TBL (name, nickname, id, pw) values ($name, $nickname, $id, $password)";

  if($c) {
  ?>      <script>
          alert('가입 되었습니다.');
          location.replace("./main.php");
          </script>

 <?php   }
         else{
 ?>      <script>
          alert("fail");
         </script>
 <?php   }
?>
