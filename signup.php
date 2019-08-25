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
    height: 300px;
    background-color: white;
    border-radius: 80px;
    position:absolute;
    left: 438px;
    top: 170px;
    text-align: center;
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
  .face{
    width: 13%;
    margin-top: 15px;
    margin-bottom: 10px;
  }
 </style>
 <body>
   <div class="out">
     <div class="login">
      <img src="img/cute_face.png" class="face"><br>
       <input type="text" class="input" placeholder=" 이름" name="id"><br>
       <input type="text" class="input" placeholder=" 닉네임" name="nickname"><br>
       <input type="text" class="input" placeholder=" 아이디" name="id"><br>
       <input type="text" class="input" placeholder=" 비밀번호" name="pw"><br>
       <input type="button" class="btn1" value="회원가입" onclick="location.href='create_homepage.php'"><br>
     </div>
   </div>
</body>
</html>