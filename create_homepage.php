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
  background-color: #EA8E33;
  margin: auto;
  box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 0.8);
  }
  .login{
    width: 400px;
    height: 500px;
    background-color: white;
    border-radius: 80px;
    position:absolute;
    left: 438px;
    top: 80px;
    text-align: center;
  }
  #character1{
    width: 100px;
    height: 120px;
    background-color: #6EB86A;
    float: left;
    margin-left: 40px;
    margin-right: 10px;
    margin-bottom: 20px;
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -ms-transform: scale(1.0);
    -o-transform: scale(1.0);
    transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  }
  #character1:hover{
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
  }
  #character2{
    width: 100px;
    height: 120px;
    background-color: #F2B736;
    float: left;
    margin-right: 10px;
    margin-bottom: 20px;
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -ms-transform: scale(1.0);
    -o-transform: scale(1.0);
    transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  }
  #character2:hover{
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
  }
  #character3{
    width: 100px;
    height: 120px;
    background-color: #E195CE;
    float: left;
    margin-bottom: 20px;
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -ms-transform: scale(1.0);
    -o-transform: scale(1.0);
    transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  }
  #character3:hover{
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
  }
  .color1{
    width: 50px;
    height: 50px;
    background-color: #4F93C1;
    float: left;
    margin-bottom: 20px;
    margin-left: 140px;
    margin-right: 10px;
    border-radius: 100%;
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -ms-transform: scale(1.0);
    -o-transform: scale(1.0);
    transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  }
  .color1:hover{
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
  }
  .color2{
    width: 50px;
    height: 50px;
    background-color: #EA8E33;
    float: left;
    margin-bottom: 20px;
    margin-right: 50px;
    border-radius: 100%;
    transform: scale(1.0);
    -webkit-transform: scale(1.0);
    -moz-transform: scale(1.0);
    -ms-transform: scale(1.0);
    -o-transform: scale(1.0);
    transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  }
  .color2:hover{
    transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
  }
  .btn1{
   background-color: orange;
   border: none;
   width: 190px;
   height: 30px;
   border-radius: 80px;
  }
  code{
    font-size: 10px;
  }
  a{
    text-decoration: none;
    color: black;
  }
  .input{
    width:190px;
    height: 25px;
    margin: 7px;
    border-radius: 10px;
    border: none;
    border:solid 1px #ccc;
  }
  .ch1{
    width: 80%;
    margin-top: 25px;
  }
  .ch2{
    width: 80%;
    margin-top: 24px;
  }
  .ch3{
    width: 80%;
    margin-top: 9px;
  }
  .face{
    width: 13%;
    margin-top: 20px;
    margin-bottom: 20px;
  }
 </style>
 <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script type="text/javascript">
   function pani(){
     alert("파니"); //update 캐릭터
   }
   function mini(){
     alert("미니");
   }
   function bora(){
     alert("보라");
   }
   function blue(){
     alert("파란색 테마");
   }
   function orange(){
     alert("오렌지색 테마");
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
   <form>
   <div class="out">
     <div class="login">
      <br><img src="img/cute_face.png" class="face"><br>
      <div>
      <div class="character1" id="character1" onclick="pani()" name="pani"><img src="img/pani.png" class="ch1"></div>
      <div class="character2" id="character2" onclick="mini()" value="mini"><img src="img/mini.png" class="ch2"></div>
      <div class="character3" id="character3" onclick="bora()" value="bora"><img src="img/bora.png" class="ch3"></div>
      </div>
      <div class="color1" onclick="blue()"></div><div class="color2" onclick="orange()"></div><br>
       <input type="text" class="input" placeholder=" 홈피 이름"><br>
       <input type="text" class="input" placeholder=" 간단한 소개"><br><br>
       <input type="button" class="btn1" value="확인" onclick="location.href='main.php'"><br>
     </div>
   </div>
   </form>
</body>
</html>
