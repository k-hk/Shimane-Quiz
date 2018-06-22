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

  if($_GET['ans']==$_SESSION['que'][tans])
  {
    print '<img src="./image/mark_maru.png" alt="maru" title="maru" hspace="100" align="middle">';
    $_SESSION['cornum']++;
    $_SESSION['cnum']++;
  }
  else
  {
    print '<img src="./image/mark_batsu.png" alt="batu" title="batu">';
  }

  print '<img src="./image/shijimi.png" alt="ans"></ans><pre><ans>A'.$_SESSION['qnum'].'.　'.$_SESSION['que']["ans{$_SESSION['que'][tans]}"].'</pre>';
  
  if($_SESSION['qnum']>=5)
  {
    print '<a href="result.php">結果発表</a>';
  }
  else
  {
    print '<a href="quiz.php">次の問題へ</a>';
  }
?>

</h1>
</body>
</html>
