<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');
  $id =  $_COOKIE["id"];
  //
  $sql = "INSERT INTO homepage_tbl (ID, CHARACTER, COLOR, HOMENAME, DESCRIBE) VALUES('$id', '파니', 'D', 'D', 'D')";
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
