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
  $url = parse_url(getenv('DATABASE_URL'));
  $dsn = sprintf('pgsql:host=%s;dbname=%s', $url['host'], substr($url['path'], 1));
  $pdo = new PDO($dsn, $url['user'], $url['pass']);

  session_start();
  $_SESSION['qnum']++;
  print "Q.".$_SESSION['qnum'];
  do{
    $_SESSION['qn']=rand(1,5);
  }while(!in_array($_SESSION['qn'],$_SESSION['endque']));

  array_push($_SESSION['endque'],$_SESSION['qn']);
  
  $sql = "select question,ans1,ans2,ans3,tans from quiz where num={$_SESSION['qn']};";
  $stmt= $pdo->query($sql);
  $_SESSION['que'] = $stmt->fetch(PDO::FETCH_ASSOC);
 
  print $_SESSION['que'][question];
  
  print "<br><br>";
  print '<pre><a href="answer.php?ans=1">'.$_SESSION['que'][ans1].'</a>';
  print '<a href="answer.php?ans=2">　　　　'.$_SESSION['que'][ans2].'　　　　</a>';
  print '<a href="answer.php?ans=3">'.$_SESSION['que'][ans3].'</a></pre>';

?>


</h1>
</body>
</html>

