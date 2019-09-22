<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');
  $id =  $_COOKIE["id"];
  $user =  $_COOKIE["user"];
  $update = $_GET["update"];
  $name = $_GET["name"];

  if($name=="name"){
    $sql = "UPDATE user_tbl SET name = '$update' where id = '$id'";
  }
  else if($name=="nickname"){
    $sql = "UPDATE user_tbl SET nickname = '$update' where id = '$id'";
  }
  else if($name=="pw"){
    $sql = "UPDATE user_tbl SET pw = '$update' where id = '$id'";
  }
  else if($name=="homename"){
    $sql = "UPDATE homepage_tbl SET homename = '$update' where id = '$id'";
  }
  else if($name=="describ"){
    $sql = "UPDATE homepage_tbl SET describe = '$update' where id = '$id'";
  }
  else if($name=="color"){
    $sql = "UPDATE homepage_tbl SET color = '$update' where id = '$id'";
  }
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
              var id = '<?= $user ?>';
              location.replace("./management.php?user="+id);
           // location.replace("./create_homepage.php");
           </script>

  <?php   }
          else{
  ?>      <script>
           // alert("fail");
          </script>
  <?php   }
  ?>
