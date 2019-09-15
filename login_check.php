<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<?php
  session_start();

  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8');

  $id = $_GET['id'];
  $pw = $_GET['pw'];

  setcookie("id", $id);


  $query = "select * from user_tbl where id='$id'";
  // $result = $conn->query($query);
  $sti = oci_parse($conn, $query);
  oci_execute($sti);
// echo "메롱";
  while ($row = oci_fetch_array($sti)){
    if($id==$row[2] && $pw==$row[3]){ // id와 pw가 맞다면 login
       $_SESSION['id']=$row[2];
       $_SESSION['nickname']=$row['1'];
       echo "<script>alert('로그인 성공!')</script>";
       echo "<script>location.href='dbconn2.php';</script>";
    }else{ // id 또는 pw가 다르다면 login 폼으로
      echo "<script>alert('로그인 실패!')</script>";
      echo "<script>location.href='login.php';</script>";
    }
  }

 ?>
