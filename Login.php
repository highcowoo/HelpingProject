<!doctype html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Helping</title>
 <meta name="description" content="ㅁㅁㅁ">
 <link rel="stylesheet" href="files/sub.css">
 <link rel="icon" type="image/png" href="files/smalllogo.png">
 </head>
<body>
<div id="home" class="big-bg">
 <header class="page-header wrapper">
  <h1><a href="blogmain.html"><img class="logo" src="files/mainlogo.svg" alt="사이트 홈"></a></h1>
  <nav>
   <ul class="main-nav">
   <li><a href="Guide.html">소개</a></li>
   <li><a href="">구인구직</a></li>
   <li><a href="Vinfor.html">봉사현황</a></li>
   <li><a href="Service.html">고객센터</a></li>
   <li><a href="">로그인</a></li>

   </ul>
   </nav>
   </header>
   
   <div class="home-content wrapper">
   
	
<?php

session_start();



?>
<form name="login_form" action="logcheck.php" method="post">
 <INPUT type="text" name="userid" placeholder="아이디" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.2em;"><BR><BR>
 <INPUT type="password" name="userpw" placeholder="비밀번호" style="WIDTH: 170pt; HEIGHT: 20pt;  background:#9ba5a0; font-size:1.2em;"><BR><BR><BR>
 <input type="submit" name="login" value="Login">
</form>

<HR size=4>
회원가입을 원하세요?
<A href="Signup.php"><font size="4" color="#b07f72">[회원가입]</font></A><BR><BR>
비밀번호를 잊으셨을때는 관리자에게 연락하세요<br>
Helping본사 000-000-0000<BR><BR>
<font size="1" color=""></font>
</p>
	
	</div>
    </div>
	


   </body>
  </html>