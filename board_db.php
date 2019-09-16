<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $title = $_GET['title'];
  $value = $_GET['value'];

  $id =  $_COOKIE["id"];
  $date = date("Y-m-d");
  $user =  $_COOKIE["user"]; //guest.php 주소에서 받은 값 쿠키로 구움 ㅠ 얜 겟방식이 안돼서 ㅜㅠ

  $sql = "INSERT INTO BOARD_TBL (NO, ID, AUTHOR, TITLE, CONTENTS, C_DATE) VALUES(NOSEQ.NEXTVAL, '$id','$user' ,'$title', '$value', '$date')";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
              var id = '<?= $user ?>';
              location.replace("./board.php?user="+id);
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }
 ?>
