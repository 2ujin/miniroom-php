<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $homename = $_GET['homename'];
  $describe = $_GET['describe'];

  $id =  $_COOKIE["id"];
  $color = $_COOKIE["color"];


  $sql = "UPDATE homepage_tbl SET color = '$color', homename = '$homename', describe = '$describe' where id = '$id'";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
           location.replace("./main.php");
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }
 ?>
