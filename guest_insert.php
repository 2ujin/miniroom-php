<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $id =  $_COOKIE["id"]; //로그인 한 값 임
  $user =  $_COOKIE["user"]; //guest.php 주소에서 받은 값 쿠키로 구움 ㅠ 얜 겟방식이 안돼서 ㅜㅠ

  $value = $_GET['value']; //textarea의 내용이지롱롱

  $result = "select * from user_tbl where id='$id'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  while ($row = oci_fetch_array($sti2)){
    setcookie("nickname", $row[1]); //로그인 한 id의 닉네임 갖고오는 거임
  }

  $nickname =  $_COOKIE["nickname"];
  $date = date("H:i:s");
  // echo $nickname;
  // echo $date;
  $sql = "INSERT INTO guest_tbl (ID, TOUSER, AUTHOR, CONTENTS, C_DATE) VALUES('$id','$user' ,'$nickname', '$value', '$date')";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);

  oci_close($conn);

  if($sti2) {
   ?>      <script>
            var id = '<?= $user ?>';
           location.replace("./guest.php?user="+id);
           </script>

  <?php   }
          else{
  ?>      <script>
           alert("fail");
          </script>
  <?php   }

 ?>
