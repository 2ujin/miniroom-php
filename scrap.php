<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $user = $_GET['user'];
  $number = $_GET['number'];
  $id =  $_COOKIE["id"];

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $result = "select DISTINCT id, title, CONTENTS, C_DATE from board_tbl where no='$number'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  while ($row = oci_fetch_array($sti2)){
    setcookie("t_id", $row[0]);
    setcookie("title", $row[1]);
    setcookie("contents", $row[2]);
    setcookie("c_date", $row[3]);
  }

  $date = date("Y-m-d");
  $t_id = $_COOKIE["t_id"];
  $title =  $_COOKIE["title"];
  $contents =  $_COOKIE["contents"];
  $c_date = $_COOKIE["c_date"];

  echo $id;

  $sql = "INSERT INTO BOARD_TBL (NO, ID, AUTHOR, TITLE, CONTENTS, C_DATE) VALUES(NOSEQ.NEXTVAL, '$user','$id' ,'$title', '$contents', '$c_date')";
  $sti = oci_parse($conn, $sql);
  oci_execute($sti);
  oci_free_statement($sti);


  oci_close($conn);


  if($sti2) {
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
