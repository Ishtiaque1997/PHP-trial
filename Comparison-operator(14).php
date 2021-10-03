<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
  //Comparison operator
  // ==  ===  !=  <>  !==  <  >  <=   >=
  $num1=45;
  $num2='45';
  var_dump($num1 == $num2);//check sthe value
  echo '<br>';
  $num1=45;
  $num2='45';
  var_dump($num1 === $num2);//checks the value and data type
  echo '<br>';
  $num1=45;
  $num2=450;
  var_dump($num1 != $num2);//checks if not equal
  echo '<br>';
  $num1=45;
  $num2=450;
  var_dump($num1 <>$num2);//checks if not equal
  echo '<br>';
  $num1=45;
  $num2='45';
  var_dump($num1 !==$num2);//checks if not equal
  echo '<br>';
  $num1=45;
  $num2=45;
  var_dump($num1 >=$num2);//checks if not equal
  echo '<br>';
  $num1=34;
  $num2=45;
  var_dump($num1 <=$num2);//checks if not equal
  
?>
</body>
</html>
