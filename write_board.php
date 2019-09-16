<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
  setcookie("user", $user);
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
?><html>
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
  table{
    font-family: "AppleSDGothicNeoM00";
    margin-left: 50px;
    border-collapse: collapse;
    padding: 10px;
  }
  .td{
    background-color: #e3f2fd;
    padding: 5px;
    border-bottom: 1px solid gray;
    border-top: 1px solid gray;
    color: #102bb7;
    font-size: 15px;
  }
  td{
    padding: 7px;
    font-size: 12px;
    border-bottom: 1px dotted gray;
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
  input{
    border-radius: 15px;
    width: 500px;
    height: 30px;
    background-color: #d1d2d7;
    border: none;
    margin-bottom: 10px;
    font-family: "AppleSDGothicNeoM00";
    padding-left: 10px;
  }
  textarea{
    border-radius: 15px;
    width: 500px;
    height: 300px;
    background-color: #d1d2d7;
    border: none;
    font-family: "AppleSDGothicNeoM00";
    padding-top: 10px;
    padding-left: 10px;
  }
  .btn{
    margin-top: 10px;
    margin-left: 420px;
    margin-bottom: 10px;
    background-color: #e3f2fd;
    border: none;
    width: 80px;
    height: 25px;
    border-radius: 80px;
    font-family: "AppleSDGothicNeoM00";
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
  location.href='./write_board.php?user='+id;
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
       <h3>&nbsp;&nbsp;&nbsp;✍ 글 작성  </h3>
       <form method="get" action="board_db.php">
         <input type="text" name="title" placeholder="  글 제목"></input><br>
         <textarea cols="50px" name="value" rows="5px" placeholder=" 내용을 입력해주세요!" name="value"></textarea>
         <input type="submit" class="btn" value="👍업로드">
       </form>
     </div>
   </div>
</body>
</html>
