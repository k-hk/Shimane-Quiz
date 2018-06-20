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
  print '5問中'.$_SESSION['cnum'].'問正解!!!<br><br>';

  if($_SESSION['cnum']==5)
  {
    print 'Congratulation!!<br>すばらしい!!<br>君は<br>島根マスターだ!!<br>';
  }
  else
  {
    print 'どうしたんだ!!<br>君の島根に対する<br>パッションは<br>この程度じゃないはずだ!!<br>';
  }

  print '<a href="index.php">タイトルへ</a>';
  
?>

</h1>
</body>
</html>
