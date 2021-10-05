<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
//super global variable
//globals/server/request/post/get/files/env/cookie/session
$a=90;
$b=80;
function learn(){
 $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];

 
}

learn();
 echo $c;
  
?>
</body>
</html>
