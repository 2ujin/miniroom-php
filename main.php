<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
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
?>
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
    background-color: #4F93C1;
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
    background-color: #D8D2C3;
    position:absolute;
    left: 925px;
    top: 385px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "AppleSDGothicNeoM00";
    font-size: 18px;
  }
  .body{
    width: 600px;
    height: 500px;
    background-color: white;
    background-image: url("img/back.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    border-radius: 20px;
    position:absolute;
    left: 340px;
    top: 130px;
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
 // location.href = "./main.php?user="+id;
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
      <img  class="main_ch" id="body_character">
    </div>
   </div>
</body>
</html>
