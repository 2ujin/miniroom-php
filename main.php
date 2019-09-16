<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user']; // 변환한 주소 값 id 얘는 그냥 색깔할떄만 필요한가.,,,?!
  $id =  $_COOKIE["id"]; // 계속 로그인한 값

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
  #input{
    /* background-color: gray; */
    position: absolute;
    left: 530px;
    top: 6px
    /* margin-left: 300px; */
  }
  #input2{
    /* background-color: gray; */
    position: absolute;
    left: 460px;
    top: 6px
    /* margin-left: 300px; */
  }
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
    var character = '<?= $_COOKIE["character"] ?>';
    var color = '<?= $_COOKIE["color"] ?>';
    var homename = '<?= $_COOKIE["homename"] ?>';
    var describe = '<?= $_COOKIE["describe"] ?>';
    var id = '<?= $user ?>'; //주소값 가져온거임 헷갈 노노 로그인한 id 아님
 // location.href = "./main.php?user="+id;
    function add_friend(){
      location.href = "./add_friend.php?user="+id;
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
         <?php
          if($id == $user){ ?>
         <?php }
          else{ ?> <!-- 로그인한 사람 페이지가 아닐때만 친구추가 버튼 보여쥼 ㅎㅎ-->
            <a><input type="button" id="input" value="🙋‍" onclick="add_friend()"></a>
          <?php }
          ?>
         <a href="logout.php"><input type="button" id="input2" value="👋"></a>

         <a href="#"><div class="random_page">🌌</div></a>
       </div>
    <div class="body">
      <img  class="main_ch" id="body_character">
    </div>
   </div>
</body>
</html>
