<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
  $name='I am too good at maths';
  echo $name;
  echo "<br>";
  echo strlen($name);//gies the length of string
  echo "<br>";
  echo str_word_count($name);//give sthe number of word
  echo "<br>";
  echo strrev($name);//reverse the string
  echo "<br>";
  echo strpos($name,'too');//specific position
  echo "<br>";
  echo str_replace('too','to',$name);//replace in a string
  echo "<br>";
  echo strtolower($name);//converts all to lower
  echo "<br>";
  echo strtoupper($name);//converts all to upper
?>
</body>
</html>
