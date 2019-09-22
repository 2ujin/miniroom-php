<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
  $number = $_GET['number'];

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $result = "select id, title, CONTENTS, C_DATE from board_tbl where no='$number'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  while ($row = oci_fetch_array($sti2)){
    setcookie("id", $row[0]);
    setcookie("title", $row[1]);
    setcookie("contents", $row[2]);
    setcookie("c_date", $row[3]);
  }

  $query = "select * from homepage_tbl where id='$user'";
  $id =  $_COOKIE["id"];

  $sti = oci_parse($conn, $query);
  oci_execute($sti);

  while ($row = oci_fetch_array($sti)){
        setcookie("color", $row[2]);
        setcookie("character", $row[1]);
        setcookie("homename", $row[3]);
        setcookie("describe", $row[4]);
  }
?>
<html>
 <head>
  <meta charset = "utf-8">
  <title>✨MINIROOM✨</title>
 </head>
  <link rel="stylesheet" href="header.css">
 <style>
  h3{
    text-align: left;
    font-size: 25px;
    font-family: "AppleSDGothicNeoM00";
  }
  .body{
    text-align: center;
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
  #title{
    border-radius: 15px;
    margin: auto;
    width: 500px;
    height: 30px;
    background-color: #d1d2d7;
    border: none;
    margin-bottom: 5px;
    font-family: "AppleSDGothicNeoM00";
    padding-left: 10px;
    text-align: center;
  }
  #author{
    border-radius: 15px;
    margin: auto;
    width: 500px;
    height: 30px;
    background-color: #d1d2d7;
    border: none;
    margin-bottom: 5px;
    font-family: "AppleSDGothicNeoM00";
    padding-left: 10px;
    text-align: center;
  }
  #value  {
    border-radius: 15px;
    width: 500px;
    margin: auto;
    height: 270px;
    background-color: #d1d2d7;
    border: none;
    font-family: "AppleSDGothicNeoM00";

    padding-top: 10px;
    padding-left: 10px;
  }
  .btn{
    margin-top: 10px;
    margin-left: 390px;
    margin-bottom: 10px;
    background-color: #e3f2fd;
    border: none;
    width: 80px;
    height: 25px;
    border-radius: 80px;
    font-family: "AppleSDGothicNeoM00";
    float: left;
  }
  .btn1{
    margin-right: 20px;
    margin-top: 10px;
    background-color: #e3f2fd;
    border: none;
    width: 80px;
    height: 25px;
    border-radius: 80px;
    font-family: "AppleSDGothicNeoM00";
  }
  #title, #author{
    line-height: 30px;
  }
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
 var character = '<?= $_COOKIE["character"] ?>';
 var color = '<?= $_COOKIE["color"] ?>';
 var homename = '<?= $_COOKIE["homename"] ?>';
 var describe = '<?= $_COOKIE["describe"] ?>';
   var id = '<?= $user ?>';

 function send(){
     location.href='./board.php?user='+id;
 }
 function send_delete() {
   var number = '<?= $number = $_GET['number']; ?>';
     location.href='./board_delete.php?user='+id+"&number="+number;
 }
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
     <div class="header">
       <div class="character1">
         <img id="character" class="ch1">
       </div>
       <p id="homename"></p>
       <p id="describe"></p>
       <a href="#"><div class="random_page">🌌</div></a>
     </div>
     <div class="body"> <!--하얀배경-->
       <h3>&nbsp;&nbsp;&nbsp;✍ 글 상세보기  </h3>
         <div type="text" id="title" >작성자 : <?= $_COOKIE["id"] ?></div>
         <div type="text" id="author" ><?= $_COOKIE["title"] ?> / <?= $_COOKIE["c_date"] ?></div>
         <div id="value"><?= $_COOKIE["contents"] ?></div>
         <input type="submit" class="btn1" value="확인" onclick="send()">
         <input type="submit" class="btn" value="삭제" onclick="send_delete()">
       <!-- </form> -->
     </div>
   </div>
</body>
</html>
