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

<taito>
島根良いものクイズ
</taito>
<pre>
<a href="quiz.php"><br><br>スタート</a>

<?php
  session_start();
  if(empty($_SESSION['cornum']))
  {
    $_SESSION['cornum']=0;
  }
  print '累計'.$_SESSION['cornum'].'問正解　　　<a href="coupon.php">特典はここをクリック</a>';
?>


言語変更<a href="index.php">        日本語</a><a href="index_eng.php">     English         </a>
</pre>
</h1>
</body>
</html>
