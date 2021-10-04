<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
 //Array operator 
 $names=array('a'=>'learn','b'=>'hunter','c'=>'subscribe');
 //print_r($names);
 $numbers=array('d'=>'learn','e'=>'hunter','f'=>'subscribe');
 print_r($names+$numbers);//combines the arrays
 echo '<br>';
 var_dump($names==$numbers);//two arrays are equal if both index and valus are equal

?>
</body>
</html>
