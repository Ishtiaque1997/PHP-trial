<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
 //Logical operator 
 //AND OR XOR && ||
 $number1=10;
 $number2=12;
 $number3=90;
 
 //and works if all are okay
 if($number1==10 && $number2==10 &&  $number3==90){
    echo 'all are ok';
 }	 
 else{
   //echo 'something wrong';
 }
 
 //or works if one is okay
  if($number1==10 || $number2==10 ||  $number3==900){
    //echo 'all are ok because or';
 }	 
 else{
   echo 'something is wrong';
 }
 
  //xor works if one is okay and others are not okay
  if($number1==10 XOR $number2==12 XOR  $number3==900){
    echo 'all are ok because xor';
 }	 
 else{
   echo 'something is wrong xor';
 }
 
 
?>
</body>
</html>
