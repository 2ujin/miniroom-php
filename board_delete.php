<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
  $number = $_GET['number'];

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $result = "delete  from board_tbl where no='$number'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  if($sti2) {
   ?>      <script>
              var id = '<?= $user ?>';
              location.replace("./board.php?user="+id);
           // location.replace("./create_homepage.php");
           </script>

  <?php   }
          else{
  ?>      <script>
           // alert("fail");
          </script>
  <?php   }
  ?>
