<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>✨MINIROOM✨</title>
 </head>
 <style>
 .out {
  width: 630px;
  height: 630px;
  background-color: #4F93C1;
  margin: auto;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
  text-align: center;
  }
  .list{
    width: 90px;
    height: 40px;
    background-color: #4F93C1;
    position:absolute;
    left: 925px;
    top: 145px;
    border-radius:0px 10px 10px 0px;
    line-height: 42px;
    font-family: "Na@거승-손글씨콘테스트2010";
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
    font-family: "Na@거승-손글씨콘테스트2010";
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
    font-family: "Na@거승-손글씨콘테스트2010";
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
    font-family: "Na@거승-손글씨콘테스트2010";
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
    font-family: "Na@거승-손글씨콘테스트2010";
    font-size: 18px;
  }
  .header{
    width: 600px;
    height: 100px;
    background-color: white;
    border-radius: 20px;
    position:absolute;
    left: 340px;
    top: 20px;
    text-align: left;
    font-size: 21px;
    font-family: "AppleSDGothicNeoM00";
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
  a{
    text-decoration: none;
    color: black;
  }
  .character1{
    width: 80px;
    height: 93px;
    background-color: #6EB86A;
    float: left;
    border-radius:20px;
    margin-top: 3px;
    margin-left: 3px;
    margin-right: 3px;
    margin-bottom: 10px;
    text-align: center;
  }
  .ch1{
    width: 80%;
    margin-top: 20px;
  }
  code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
  }
  b{
    color: #1029ac;
  }
.main_ch{
  width: 90px;
  position:absolute;
  left: 260px;
  top: 200px;
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
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
     $(".list").on("click", function(){
         $(".list").css("background-color", "#4F93C1");
     });
     $(".list1").on("click", function(){
         $(".list1").css("background-color", "#4F93C1");
     });
     $(".list2").on("click", function(){
         $(".list2").css("background-color", "#4F93C1");
     });
     $(".list3").on("click", function(){
         $(".list3").css("background-color", "#4F93C1");
     });
     $(".list4").on("click", function(){
         $(".list4").css("background-color", "#4F93C1");
     });
   });
</script>
 <body>
   <div class="out">
       <a href="main.php"><div class="list">&nbsp;&nbsp;&nbsp;&nbsp;홈</div></a>
       <a href="board.php"><div class="list1">&nbsp;&nbsp;&nbsp;게시판</div></a>
       <a href="guest.php"><div class="list2">&nbsp;&nbsp;&nbsp;방명록</div></a>
       <a href="store.php"><div class="list3">&nbsp;&nbsp;&nbsp;상점</div></a>
       <a href="management.php"><div class="list4">&nbsp;&nbsp;&nbsp;&nbsp;관리</div></a>
       <div class="header">
         <div class="character1"><img src="img/ch1.png" class="ch1"></div><br>
         &nbsp;&nbsp;🏡<b>유진</b>님의 미니홈피<br>
         <code>&nbsp;&nbsp;안녕하세요 ~~ 제 미니홈피에 놀러오신 것을 환영합니다 😛 </code>
         <a href="#"><div class="random_page">🌌</div></a>
       </div>
    <div class="body">
      <img src="img/character1.png" class="main_ch">
    </div>
   </div>
</body>
</html>
