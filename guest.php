<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
  setcookie("user", $user);

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))

  $result = "select AUTHOR, CONTENTS, C_DATE from guest_tbl where touser='$user' ORDER BY c_date ASC";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

  $query = "select * from homepage_tbl where id='$user'"; //$user로 해야 주소를 바꿀 때 마다 캐릭터랑 그런게 바뀌니꽌,,
  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))
  $sti = oci_parse($conn, $query);
  oci_execute($sti);

  while ($row = oci_fetch_array($sti)){
        setcookie("color", $row[2]); //user의 색깔져장
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
    background-color: #4F93C1;
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
  #guest_tbl{
    width:560px;
    height: 265px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 180px;
    text-align: center;
    margin: auto;
    overflow-x: hidden;
    overflow-y: auto;
    /* background-color: #cecece; */
  }
  code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
  }
  .code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
    position:absolute;
    top: 35px;
    left: 150px;
  }
  .write{
    width:560px;
    height: 135px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 35px;
    background-color: #cecece;
  }
  #table{
    margin: auto;
    background-color: #cecece;
    border-radius: 30px;
    margin-bottom: 5px;
  }
  .btn1{
   position:absolute;
   border: none;
   background-color: #b5b6bc;
   width: 80px;
   height: 25px;
   border-radius: 80px;
   left: 380px;
   top: 100px;
   font-family: "AppleSDGothicNeoM00";
  }
  textarea{
    margin-top: 10px;
  }
  .guest_write{
    width:560px;
    height: 35px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 195px;
    background-color: #d1d2d7;
    line-height: 40px;
  }
  .guest_write1{
    width:560px;
    height: 35px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 245px;
    background-color: #d1d2d7;
    line-height: 40px;
  }
  .guest_write2{
    width:560px;
    height: 35px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 295px;
    background-color: #d1d2d7;
    line-height: 40px;
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
       <h3>&nbsp;&nbsp;&nbsp;💌 방명록  |  </h3>
       <code class="code">나를 찾아주는 방문자와 안부를 묻고 대화를 할 수 있어요.<code>
      <form method="get" class="write" action="guest_insert.php" >
        <textarea cols="50px" rows="5px" placeholder="내용을 입력해주세요!" name="value"></textarea>
        <input type="submit" value="✍글쓰기" class="btn1" onclick="send()">
      </form>
      <div id="guest_tbl">
        <?php
        while ($row = oci_fetch_array($sti2)){
          echo "<table id='table'><tr>";
          echo "<td width='100px'>📢 $row[0] : </td>";
          echo "<td width='480px'>$row[1]</td>";
          echo "</tr></table>";
        }
        ?>
      </div>
    </div>
      <!-- <div class="guest_write">
      📢 은서 : 안녕하세용!~ 놀러왔서욤 ㅎㅎ
      </div>
      <div class="guest_write1">
        📢 은서 : 반가워요 ㅎㅎㅎㅎㅎ :-)
      </div>
      <div class="guest_write2">
        📢 소민 : 내일 놀 사람 ~~~ 전 너무 심심해요 ㅜㅠ
      </div> -->
     </div>
     <div>
   </div>
</body>
</html>
