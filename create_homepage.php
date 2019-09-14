<head><meta content="text/html; charset=utf-8"></head> <!-- 한글 안깨지게 -->
<!DOCTYPE html>
<html>
 <head>
  <meta charset = "utf-8">
  <title>✨MINIROOM✨</title>
 </head>
 <link rel="stylesheet" href="style.css">
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
  function pani(){
    location.href = 'pani.php';
  }
  function mini(){
    location.href = 'mini.php';
  }
  function bora(){
    location.href = 'bora.php';
  }
  function blue(){
    location.href = 'blue.php';
  }
  function orange(){
    location.href = 'orange.php';
  }
   $(document).ready(function(){
     $(".character1").on("click", function(){
         $(".character1").css("opacity", 0.8);
         $(".character1").css("width", 110);
         $(".character1").css("height", 120);
         $(".character3").css("opacity", 0.1);
         $(".character2").css("opacity", 0.1);
     });
     $(".character2").on("click", function(){
         $(".character2").css("opacity", 0.8);
         $(".character2").css("width", 110);
         $(".character2").css("height", 120);
         $(".character1").css("opacity", 0.1);
         $(".character3").css("opacity", 0.1);
     });
     $(".character3").on("click", function(){
         $(".character3").css("opacity", 0.8);
         $(".character3").css("width", 110);
         $(".character3").css("height", 120);
         $(".character2").css("opacity", 0.1);
         $(".character1").css("opacity", 0.1);
     });
 });
 $(document).ready(function(){
   $(".color1").on("click", function(){
       $(".color1").css("opacity", 0.8);
       $(".color2").css("opacity", 0.1);
   });
   $(".color2").on("click", function(){
       $(".color2").css("opacity", 0.8);
       $(".color1").css("opacity", 0.1);
   });
});
 </script>
 <body>
   <form method="get" action="create_homepage_db.php">
   <div class="out">
     <div class="login">
      <br><img src="img/cute_face.png" class="face"><br>
      <div>
      <div class="character1" id="character1" onclick="pani()" name="pani"><img src="img/pani.png" class="ch1"></div>
      <div class="character2" id="character2" onclick="mini()" name="mini"><img src="img/mini.png" class="ch2"></div>
      <div class="character3" id="character3" onclick="bora()" name="bora"><img src="img/bora.png" class="ch3"></div>
      </div>
      <div class="color1" onclick="blue()" name="blue"></div><div class="color2" onclick="orange()" name="orange"></div><br>
       <input type="text" class="input" placeholder=" 홈피 이름" name="homename"><br>
       <input type="text" class="input" placeholder=" 간단한 소개" name="describe"><br><br>
       <input type="submit" class="btn1" value="확인"><br>
     </div>
   </div>
   </form>
</body>
</html>
