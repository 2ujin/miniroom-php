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
    background-color: #D8D2C3;
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
    background-color: #4F93C1;
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
    left: 150px;
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
  .write{
    width:560px;
    height: 135px;
    border-radius: 20px;
    position:absolute;
    left: -130px;
    top: 35px;
    background-color: #cecece;
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
       <h3>&nbsp;&nbsp;&nbsp;💌 방명록  |  </h3>
       <code class="code">나를 찾아주는 방문자와 안부를 묻고 대화를 할 수 있어요.<code>
      <div class="write">
        <textarea cols="50px" rows="5px" placeholder="내용을 입력해주세요!"></textarea>
        <input type="button" value="✍글쓰기" class="btn1">
      </div>
      <div class="guest_write">
        📢 은서 : 안녕하세용!~ 놀러왔서욤 ㅎㅎ
      </div>
      <div class="guest_write1">
        📢 은서 : 반가워요 ㅎㅎㅎㅎㅎ :-)
      </div>
      <div class="guest_write2">
        📢 소민 : 내일 놀 사람 ~~~ 전 너무 심심해요 ㅜㅠ
      </div>
     </div>
   </div>
</body>
</html>
