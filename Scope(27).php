<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
$a=10;
function learn(){
 $k=10;
 echo $k;
 echo '<br>';
} 
function hunter(){
 global $a;//globally declared
 echo $a;
 echo '<br>';
 $l=20;
 //echo $k;//undefined as it is not declared(scope)
 echo $l;
 echo '<br>';
}
learn();
hunter();

  
?>
</body>
</html>
