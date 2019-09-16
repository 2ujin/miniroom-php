<head><meta content="text/html; charset=utf-8"></head>
<?php
  $host = 'localhost';
  $username = 'minirooma';
  $password = '1234';
  $database = "localhost/xe";
  $user = $_GET['user'];

  $conn = oci_connect($username, $password, $database,  'AL32UTF8'); //한글안깨지게 ((필수임))

  $result = "select  NO, ID, TITLE, C_DATE from BOARD_TBL where AUTHOR = '$user'";
  $sti2 = oci_parse($conn, $result);

  oci_execute($sti2);

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
    /* margin-top: 30px; */
    margin: auto;
    /* margin-left: 50px; */
    border-collapse: collapse;
    /* padding: 10px; */
    text-align: center;
    }
  th{
    background-color: #e3f2fd;
    padding: 5px;
    border-bottom: 1px solid gray;
    border-top: 1px solid gray;
    color: #102bb7;
    text-align: center;
    font-size: 13px;
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
  #btn{
    margin-top: 10px;
    margin-left: 480px;
    margin-bottom: 10px;
    background-color: #e3f2fd;
    border: none;
    width: 80px;
    height: 25px;
    border-radius: 80px;
    font-family: "AppleSDGothicNeoM00";
  }
  #board_tbl{
    width:560px;
    height: 360px;
    /* border-radius: 20px; */
    text-align: center;
    margin: auto;
    overflow-x: hidden;
    overflow-y: auto;
  }
  .code{
    font-size: 15px;
    font-family: "AppleSDGothicNeoM00";
    position:absolute;
    top: 35px;
    left: 150px;
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
       <h3>&nbsp;&nbsp;&nbsp;📄 게시판 | </h3>
       <code class="code">친구들과 글을 써서 소통할 수 있어요.</code>
       <div id="board_tbl">
       <table>
          <tr>
            <th width="40px">번호</th>
            <th width="50px">아이디</th>
            <!-- <th width="220px">글쓴이</th> -->
            <th width="280px">제목</th>
            <th width="150px">날짜</th>
          </tr>
        </table>
       <?php
         while ($row = oci_fetch_array($sti2)){
           echo "<table id='table'>";
           echo "<tr><td width='40px'> $row[0] </td>";
           echo "<td width='40px'>$row[1]</td>";
           echo "<td width='280px'>$row[2]</td>";
           echo "<td width='150px'>$row[3]</td>";
           // echo "<td width='100px'>$row[4]</td>";
           echo "</tr></table>";
         }
      ?>
      </div>
      <input type="button" value="✍글쓰기" id="btn" onclick="send()" >

     </div>

   </div>

</body>
</html>
