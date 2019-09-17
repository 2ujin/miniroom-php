<head><meta content="text/html; charset=utf-8"></head>
<?php
session_start(); // 세션
$host = 'localhost';
$username = 'minirooma';
$password = '1234';
$database = "localhost/xe";
$user = $_GET['user'];

$result = "select * from user_tbl where id='$user'";
$id =  $_COOKIE["id"];
$conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
$sti2 = oci_parse($conn, $result);
oci_execute($sti2);


$query = "select * from homepage_tbl where id='$user'";
$id =  $_COOKIE["id"];
$conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
$sti = oci_parse($conn, $query);
oci_execute($sti);

while ($row = oci_fetch_array($sti)){
      setcookie("color", $row[2]);
      setcookie("character", $row[1]);
      setcookie("homename", $row[3]);
      setcookie("describe", $row[4]);
}
while ($row = oci_fetch_array($sti2)){
  // echo $row[0];
  setcookie("user_name", $row[0]);
  setcookie("user_nickname", $row[1]);
  setcookie("user_id", $row[2]);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>✨MINIROOM✨</title>
 </head>
   <link rel="stylesheet" href="header.css">
 <style>
  .list{
    width: 90px;
    height: 40px;
    background-color: #D8D2C3;
    position:absolute;
    left: 925px;
    top: 145px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  .list1{
    width: 90px;
    height: 40px;
    background-color: #D8D2C3;
    position:absolute;
    left: 925px;
    top: 205px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  .list2{
    width: 90px;
    height: 40px;
    background-color: #D8D2C3;
    position:absolute;
    left: 925px;
    top: 265px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  .list3{
    width: 90px;
    height: 40px;
    background-color: #D8D2C3;
    position:absolute;
    left: 925px;
    top: 325px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  .list4{
    width: 90px;
    height: 40px;
    background-color: #4F93C1;
    position:absolute;
    left: 925px;
    top: 385px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  h3{
    text-align: left;
    font-size: 25px;
    font-family: "AppleSDGothicNeoM00";
  }
  .code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
    position:absolute;
    top: 35px;
    left: 126px;
  }
  #home{
    /* width: 500px; */
    font-family: "AppleSDGothicNeoM00";
  }
  #table{
    margin: auto;
    width: 500px;
  }
  #table2{
    /* margin-top: -600px; */
    margin: auto;
    width: 500px;
  }
  #cc{
    text-align: center;
  }
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
 var character = '<?= $_COOKIE["character"] ?>';
 var color = '<?= $_COOKIE["color"] ?>';
 var homename = '<?= $_COOKIE["homename"] ?>';
 var describe = '<?= $_COOKIE["describe"] ?>';
 var id = '<?= $user ?>';
$(document).ready(function(){
  $("#homename").text("🏡" + homename);
  $("#describe").text(describe);

  if(character == '미니'){
    $("#character").attr("src", "img/mini.png");
    $("#body_character").attr("src", "img/mini_body.png");
  }
  else if(character == '파니'){
    $("#character").attr("src", "img/pani.png");
    $("#body_character").attr("src", "img/pani_body.png");
  }
  else if(character == '보라'){
    $("#character").attr("src", "img/bora.png");
    $("#body_character").attr("src", "img/bora_body.png");
    $("#character").css("margin-top", "8px");
    $("#character").css("width", "70%");
  }
  if(color == '파란색'){
  }
  else{
    $(".out").css("background-color", "#EA8E33");
  }
     $(".list").on("click", function(){
         $(".list").css("background-color", "#4F93C1");
         location.href = "./main.php?user="+id;
          // location.href = "./main.php?user="+id;
     });
     $(".list1").on("click", function(){
         $(".list1").css("background-color", "#4F93C1");
         location.href = "./board.php?user="+id;
     });
     $(".list2").on("click", function(){
         $(".list2").css("background-color", "#4F93C1");
         location.href = "./guest.php?user="+id;
     });
     $(".list3").on("click", function(){
         $(".list3").css("background-color", "#4F93C1");
         location.href = "./store.php?user="+id;
     });
     $(".list4").on("click", function(){
         $(".list4").css("background-color", "#4F93C1");
         location.href = "./management.php?user="+id;
     });
   });
</script>
 <body>
   <div class="out">
     <a><div class="list">&nbsp;&nbsp;&nbsp;&nbsp;홈</div></a>
     <a><div class="list1">&nbsp;&nbsp;&nbsp;게시판</div></a>
     <a><div class="list2">&nbsp;&nbsp;&nbsp;방명록</div></a>
     <a><div class="list3">&nbsp;&nbsp;&nbsp;상점</div></a>
     <a><div class="list4">&nbsp;&nbsp;&nbsp;&nbsp;관리</div></a>
     <div class="header">
       <div class="character1">
         <img id="character" class="ch1">
       </div>
       <p id="homename"></p>
       <p id="describe"></p>
       <a href="#"><div class="random_page">🌌</div></a>
     </div>
     <div class="body">
       <h3>&nbsp;&nbsp;&nbsp;🔧 관리 </h3><br><br>
       <caption>회원정보</caption>
         <table id="table2">
           <tr>
             <td>이름</td>
             <td id="cc"><input type="text" name="user_name" value=<?= $_COOKIE["user_name"]?>></td>
             <td id="cc"><a href="#" style='color:blue;'><input type="button" value="수정"></a></td>
           </tr>
           <tr>
             <td>닉네임</td>
             <td id="cc"><input type="text" value=<?= $_COOKIE["user_nickname"]?>></td>
             <td id="cc"><input type="button" value="수정"></td>
           </tr>
           <tr>
             <td>아이디</td>
             <td id="cc"><input type="text" value=<?= $_COOKIE["user_id"]?>></td>
             <td id="cc"><input type="button" value="수정"></td>
           </tr>
         </table><br>
       <caption>홈피내용</caption>
         <table id="table">
           <tr>
             <td>홈피이름</td>
             <td id="cc"><input type="text" value=<?= $_COOKIE["homename"]?></td>
             <td id="cc"><input type="button" value="수정"></td>
           </tr>
           <tr>
             <td>한줄소개</td>
             <td id="cc"><input type="text" value=<?= $_COOKIE["describe"]?></td>
             <td id="cc"><input type="button" value="수정"></td>
           </tr>
           <tr>
             <td>색상</td>
             <td id="cc"><input type="text" value=<?= $_COOKIE["color"]?></td>
             <td id="cc"><input type="button" value="수정"></td>
           </tr>
         </table>
     </div>
   </div>
</body>
</html>
