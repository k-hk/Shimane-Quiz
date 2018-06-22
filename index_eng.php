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

Shimane<br>
Good things<br>
Quiz<br>
<pre>
<a href="quiz.php"><br><br>スタート</a>


<?php
  session_start();
  if(empty($_SESSION['cornum']))
  {
    $_SESSION['cornum']=0;
  }
  $_SESSION['qnum']=0;
  $_SESSION['cnum']=0;
  $_SESSION['endque']=array();
  array_push($_SESSION['endque'],0);
  
  $prize=5;
  if($_SESSION['cornum']>=$prize)
  {
    print 'grand total'.$_SESSION['cornum'].'question correctly　　　　<a href="coupon.php" target="_blank">特典はここをクリック</a>';
  }
  else
  {
    print 'grand total'.$_SESSION['cornum'].'question correctly　　　　累計正解数が'.$prize.'を超えると??';
  }
?>


language selection  <a href="index.php">日本語</a>     <a href="index_eng.php">English</a>         </pre>
</h1>
</body>
</html>
