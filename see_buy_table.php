<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $id =  $_COOKIE["id"];
  // echo $id;
  $result = "select  s.name, s.src from store_tbl s, buy_tbl b where b.name = s.name and b.id = '$id'";
  $sti2 = oci_parse($conn, $result);
  oci_execute($sti2);

?>
<html>
 <head>
  <meta charset = "utf-8">
  <title>✨MINIROOM✨</title>
 </head>
  <link rel="stylesheet" href="header.css">
 <style>
  h3{
    text-align: center;
    /* font-size: 25px; */
    font-family: "AppleSDGothicNeoM00";
  }
  table{
    font-family: "AppleSDGothicNeoM00";
    margin: auto;
    border-collapse: collapse;
    text-align: center;
    padding: 10px;
    }
  th{
    background-color: #e3f2fd;
    padding: 5px;
    border-bottom: 1px solid gray;
    border-top: 1px solid gray;
    color: #102bb7;
    text-align: center;
    font-size: 13px;
  }
  td{
    padding: 7px;
    font-size: 12px;
    border-top: 1px dotted gray;
  }
  .random_page{
    width:60px;
    height: 60px;
    border-radius: 50%;
    position:absolute;
    left: 530px;
    top: 30px;
    text-align: center;
    font-size: 40px;
    line-height: 60px;
  }
  #board_tbl{
    width:560px;
    height: 360px;
    /* border-radius: 20px; */
    text-align: center;
    margin: auto;
    overflow-x: hidden;
    overflow-y: auto;
  }
  .code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
    position:absolute;
    top: 35px;
    left: 150px;
  }
  .move{
    color: blue;
  }
  #img1{
    width: 65px;
  }
  #cc{
    margin-left: 175px;
    border: none;
  }
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
 function fclose(){
   window.close();
 }
</script>
 <body>
    <h3>👜</h3>
       <?php
         while ($row = oci_fetch_array($sti2)){
           echo "<table>";
           echo "<tr><td width='200px'> $row[0] </td>";
           echo "<tr><td width='200px'><img src=$row[1] id='img1'> </td>";
           echo "</tr></table>";
         }
      ?>
      <input type="button" value="확인" id="cc" onclick="fclose()" >
</body>
</html>
