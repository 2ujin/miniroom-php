 <html>
  <head>
   <meta charset = "utf-8">
   <title>✨MINIROOM✨</title>
  </head>
   <link rel="stylesheet" href="header.css">
  <style>
  html {overflow:hidden;}
  form{
    margin-top: 100px;
    margin: auto;
    text-align: center;
    font-family: "AppleSDGothicNeoM00";
  }
  input{
    font-family: "AppleSDGothicNeoM00";
  }
  hr{
    /* height: 0px; */
    border: 1px dashed gray;
  }
  div{
    margin-top: 20px;
  }
  #btn{
    /* background-color: #e3f2fd; */
    border: none;
    border-radius: 20px;
    width: 100px;
  }
  </style>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
 </script>
  <body>
    <div>
      <form method='get' action="buy_table_db.php">
        <input type="radio" name="product" value="회색신발">💖 회색신발 👟<br>
        <input type="radio" name="product" value="분홍신발">💗 분홍신발 👟<br>
        <input type="radio" name="product" value="파란신발">💙 파란신발 👟<br>
        <hr width="100">
        <input type="radio" name="product" value="하늘치마">💙 하늘치마 👗<br>
        <input type="radio" name="product" value="보라치마">💜 보라치마 👗<br>
        <input type="radio" name="product" value="갈색치마">🖤 갈색치마 👗<br>
        <hr width="100">
        <input type="radio" name="product" value="하늘색티">💙 하늘색티 👕<br>
        <input type="radio" name="product" value="노란색티">💛 노란색티 👕<br>
        <input type="radio" name="product" value="초록색티">💚 초록색티 👕<br><br>
        <input type="submit" id="btn" value="구입">
      </form>
    </div>
 </body>
 </html>
