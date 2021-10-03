<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
  //declare a variable
  $name='sakib';
  $number=89;
  $fact=false;
  
  //print a variable
  echo $name;
  echo "<br>";//goes to next line
  echo $number;
  echo $fact;
  
  //echo is faster and takes more parameter but print is slow and can take only one
  echo "hello world,'iopiop'";
  echo "<br>";
  print"hello world";
  echo "<br>";
  
  //data types. There are 8 type of data types.
  //1. String 2. Integer 3. Float 4. Bolean 5. Array 6. Object 7. Null 8. Resource
  $learn='learn hunter';
  var_dump($learn);
  echo "<br>";
  $num=100.90;
  var_dump($num);
  echo "<br>";
  $facet=false;
  var_dump($facet);
  echo "<br>";
  $names=array('sakib','mahi','poli');
  var_dump($names);
  echo "<br>";
  $cat;
  var_dump($cat);
  
  
  //var_dump gives length, type of a variable
  var_dump($name);
  //print_r
?>
</body>
</html>