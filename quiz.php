<html>
<head>
<title>島根良いものクイズ</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta http-equiv="Content-Language" content="ja">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<link rel="stylesheet" href="./quiz.css" type="text/css">
<style type="text/css">
<!--
  a:link {color:white;}
  a:visited{color:white;} 
  a:hover{color:white;} 
  a:active{color:white;}
  a {text-decoration:none;} 
-->
</style>
</head>
<body>
<h1>
<?php
  session_start();
  $_SESSION['qnum']++;
  print "Q.".$_SESSION['qnum'];
  print "<br>主に宍道湖でとれる<br>島根の漁獲量が3年連続日本一の<br>水産物は何でしょう？";

  print "<br><br><br>";
  $a="シジミ";
  $b="サザエ";
  $c="マグロ";
  print '<pre><a href="answer.php?ans=1">'.$a.'</a>';
  print '<a href="answer.php?ans=2">'.$b.'</a>';
  print '<a href="answer.php?ans=3">'.$c.'</a></pre>';

?>


</h1>
</body>
</html>
