<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $name = $_GET['name'];
  $nickname = $_GET['nickname'];
  $id = $_GET['id'];
  $password = md5($_GET['pw']);

  echo $name;

  $sql = "INSERT INTO user_tbl (NAME, NICKNAME, ID, PW) VALUES('$name', '$nickname', '$id', '$password')";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
           location.replace("./create_homepage.php");
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }
 ?>
