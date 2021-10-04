<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
//indexed array
  $names=array('sohel','masud','rana');
  echo "<pre>";
  print_r ($names);//prints the whole array
  echo "</pre>";
  echo ($names[1]);//prints the secone element of array
  echo '<br>';
  echo count($names);//give the length of array.
  echo '<br>';
  $length=count($names);
  for($i=0;$i<$length;$i++){
    echo $names[$i];
    echo "<br>";
  }
  $class=array('one'=>'sohel','two'=>'hamid','three'=>'jahid');
  print_r($class);

 //
  
?>
</body>
</html>
