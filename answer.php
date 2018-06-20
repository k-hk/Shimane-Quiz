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
  /*
  if(1)
  {
    print "<taito><font color="red">○</fonr></taito><br>";
  }
  else
  {
    print "<taito><font color="blue">×</fonr></taito><br>";
  }
  */
  print "<taito><font color="blue">×</font></taito><br>";
  $a="シジミ";
  print "A.".$_SESSION['qnum'].$a."<br>";
  

?>


</h1>
</body>
</html>
