<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];
  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))

  $result1 = "select name, src from store_tbl where kind='신발'";
  $sti1 = oci_parse($conn, $result1);
  oci_execute($sti1);

  $result2 = "select name, src from store_tbl where kind='치마'";
  $sti2 = oci_parse($conn, $result2);
  oci_execute($sti2);

  $result3 = "select name, src from store_tbl where kind='티셔츠'";
  $sti3 = oci_parse($conn, $result3);
  oci_execute($sti3);

  $query = "select * from homepage_tbl where id='$user'";
  $id =  $_COOKIE["id"];
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
    background-color: #4F93C1;
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
  .code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
    position:absolute;
    top: 35px;
    left: 120px;
  }
  #contents{
    width: 600px;
    height: 380px;
    /* background-color: red; */
    position:absolute;
    left: -120px;
    top: 40px;
    overflow-x: hidden;
    overflow-y: hidden;
  }
  #img{
    width: 100px;
  }
  #img1{
    width: 65px;
  }
  table{
    font-family: "AppleSDGothicNeoM00";
    margin: auto;
    border-collapse: collapse;
    text-align: center;
    padding: 10px;
  }
  td{
    padding: 7px;
    font-size: 12px;
    /* border-bottom: 1px dotted gray; */
  }
  #shoes{
    width: 200px;
    height: 380px;
    float: left;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
  }
  #h3{
    text-align: center;
  }
  #dress{
    width: 200px;
    height: 380px;
    position:absolute;
    left: 200px;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
  }
  #tshirt{
    width: 200px;
    height: 380px;
    position:absolute;
    left: 400px;
    float: left;
    overflow-x: hidden;
    overflow-y: auto;
    text-align: center;
  }
  #btn{
    position:absolute;
    top: 410px;
    left: 130px;
    /* margin-top: 380px; */
    /* margin-left: 140px; */
    /* margin-bottom: 10px; */
    background-color: #e3f2fd;
    border: none;
    width: 100px;
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

function popup(){
  var popupX = (document.body.offsetWidth / 2) - (200 / 2) - 80;
  var popupY= (document.body.offsetHeight / 2) - (300 / 2) - 60;
  window.open("buy_table.php", "pop", 'width=400,height=300,history=no,resizable=no,status=no,scrollbars=no,menubar=no, left='+popupX+', top=' + popupY);
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
       <a href="#"><div class="random_page">🌌</div></a>
     </div>
     <div class="body">
       <h3>&nbsp;&nbsp;&nbsp;👗 상점  |  </h3>
       <code class="code">미니미의 옷과 가구를 구입할 수 있어요.<code><br>
      <div id="contents">
        <div id="shoes">
          <h3 id="h3">👟</h3>
          <?php
            while ($row = oci_fetch_array($sti1)){
              echo "<table>";
              echo "<tr><td width='100' height='80'> $row[0] </td>";
              echo "<td width='100'><img src=$row[1] id='img'></td>";
              echo "</tr></table>";
            }
         ?>
        </div>
        <div id="dress">
          <h3 id="h3">👗</h3>
          <?php
            while ($row = oci_fetch_array($sti2)){
              echo "<table>";
              echo "<tr><td width='100px'> $row[0] </td>";
              echo "<td width='100px'><img src=$row[1] id='img1'></td>";
              echo "</tr></table>";
            }
         ?>
        </div>
        <div id="tshirt">
          <h3 id="h3">👕</h3>
          <?php
          while ($row = oci_fetch_array($sti3)){
            echo "<table>";
            echo "<tr><td width='100px'> $row[0] </td>";
            echo "<td width='100px'><img src=$row[1] id='img1'></td>";
            echo "</tr></table>";
          }
         ?>
        </div>
      </div>
      <input type="button" value="👜구매하기" id="btn" onclick="popup()" >
    </div>
   </div>
</body>
</html>
