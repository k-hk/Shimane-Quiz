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
    print '<img src="./image/mark_maru.png" alt="maru" title="maru" hspace="100" align="top">';
    $_SESSION['cornum']++;
    $_SESSION['cnum']++;
  }
  else
  {
    print '<img src="./image/mark_batsu.png" alt="batu" title="batu" hspace="100" align="top">';
  }

  print '<img src="./image/'.$_SESSION['img'][name].'" alt="ans" height=300 width=300><br><br>';
  print '<pre>A'.$_SESSION['qnum'].'.　'.$_SESSION['que']["ans{$_SESSION['que'][tans]}"].'</pre>';
  if($_SESSION['lang']==0)
  {
    if($_SESSION['qnum']>=5)
    {
      print '<br><a href="result.php">結果発表</a>';
    }
    else
    {
      print '<br><a href="quiz.php">次の問題へ</a>';
    }
  }
  else
  {
    if($_SESSION['qnum']>=5)
    {
      print '<br><a href="result.php">Result</a>';
    }
    else
    {
      print '<br><a href="quiz_eng.php">Next Question</a>';
    }
  }
?>

</h1>
</body>
</html>
