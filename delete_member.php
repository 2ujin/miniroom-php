<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $result = "delete from user_tbl where id = '$user'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  $result = "delete from homepage_tbl where id = '$user'";
  $sti = oci_parse($conn, $result);

  oci_execute($sti);


  if($sti2) {
   ?>      <script>
              var id = '<?= $user ?>';
              alert("정상적으로 회원탈퇴가 완료되었습니다.");
              location.replace("./login.php");
           </script>

  <?php   }
          else{
  ?>      <script>
           // alert("fail");
          </script>
  <?php   }
  ?>
