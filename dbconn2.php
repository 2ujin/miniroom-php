<head><meta content="text/html; charset=utf-8"></head>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

$host = 'localhost';
$username = 'minirooma';
$password = '1234';
$database = "localhost/xe";
$id =  $_COOKIE["id"];
$query = "select * from homepage_tbl where id='$id'";


$conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
$sti = oci_parse($conn, $query);
oci_execute($sti);

while ($row = oci_fetch_array($sti)){
      setcookie("color", $row[2]);
      setcookie("character", $row[1]);
      setcookie("homename", $row[3]);
      setcookie("describe", $row[4]);
}
// echo $_COOKIE["describe"];
if($sti) {
 ?>      <script>
         location.replace("./main.php");
         </script>

<?php   }
        else{
?>      <script>
         alert("fail");
        </script>
<?php   }
?>
