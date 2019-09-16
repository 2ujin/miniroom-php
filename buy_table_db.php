<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $id =  $_COOKIE["id"]; //로그인 한 값 임
  $user =  $_COOKIE["user"]; //guest.php 주소에서 받은 값 쿠키로 구움 ㅠ 얜 겟방식이 안돼서 ㅜㅠ
  $product = $_GET["product"];

  $sql = "INSERT INTO buy_tbl (ID, NAME) VALUES('$id', '$product')";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti) {
   ?>      <script>
            window.close();
            alert("구매완료 !!")
            var id = '<?= $user ?>';
            location.replace("./store.php?user="+id);
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }

 ?>
