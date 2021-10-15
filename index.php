<?php

//make connection
$connection=mysqli_connect('localhost','root','','php-first-practice');

//check connection
if($connection==false){
  echo('Error:could not connect'.mysqli_connect_error());
}
else{
  // echo 'done with connection';
}


// //inserting values
$sql="INSERT INTO infos(first_name,last_name,email)
VALUES('Ishtiaque','Ahmed','ishtiaque07031997@gmail.com')";

if(mysqli_query($connection,$sql)){
  echo'data inserted';
}
else{
  echo 'something is wrong';
}

// //close connection
mysqli_close($connection);
?>