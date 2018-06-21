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
  var_dump($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

  session_start();
  $_SESSION['qnum']++;
  print "Q.".$_SESSION['qnum'];

  $_SESSION['qn']=rand(1,1);
  array_push($_SESSION['endque'],$_SESSION['qn']);
  print_r($_SESSION['endque']);
  $sql = "select question,ans1,ans2,ans3,tans from quiz where num={$_SESSION['qn']};";
  print $sql;
  $res= $pdo->query($sql);
  foreach( $res as $value ) {
   // echo "$value[question]<br>";
    echo "$value[ans1]<br>";
  }
  print $res[question];
  print "<br><br>";
  $a="シジミ";
  $b="サザエ";
  $c="マグロ";
  print '<pre><a href="answer.php?ans=1">'.$a.'</a>';
  print '<a href="answer.php?ans=2">　　　　'.$b.'　　　　</a>';
  print '<a href="answer.php?ans=3">'.$c.'</a></pre>';

?>


</h1>
</body>
</html>

