<!doctype html>

 <head>
 
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Helping</title>

 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 
 </head>
 
 <center>
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
    <li><a href="aGuide.html">소개</a></li>
   <li><a href="notice.php">구인구직</a></li>
   <li><a href="Vinfor.php">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
    <li><a href="Service.html">내정보</a></li>
  <li><a href="blogmain.html" onclick="alert('로그아웃 되었습니다');">로그아웃</a></li>

   </ul>
   </nav>
   </header>
<h1 >[내정보]</h1>
<HR size=4>
<?php

session_start();


?>
<UL type="disc">
</UL>
<strong> 비밀번호를 입력해 본인인증 을해주세요.</strong> 
<form name="login_form2" action="inforlogcheck.php" method="post">
 <INPUT type="password" name="userpw" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.2em;"><BR><BR><BR>
 <input type="submit" name="login" value="Login">
</form>




 <HR size=4><BR>


 </font>
<div style= "text-align:center;">고객문의 000-000-0000<BR><BR></div>
<font size="1" color=""><BR>@capston 8team helping</font>

 </body>
 
 </center>
</html>
