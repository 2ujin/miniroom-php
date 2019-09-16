<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $id =  $_COOKIE["id"]; //친구신청한사람 (로그인한 사람
  $user = $_GET['user']; //친구신청 당한 사람 (팔로우 당할 사람)
  $date = date("Y-m-d");
  $sql = "INSERT INTO friend_tbl (id, mem_id, target_mem_id) VALUES('$id', '$id', '$user')";

  // select * where mem_id=$id
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
              var id = '<?= $user ?>';
              location.replace("./main.php?user="+id);
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }
 ?>
