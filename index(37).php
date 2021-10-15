<?php
//connection making
$servername='localhost';
$username='root';
$password='';
$dbname='php-first-practice';

$connection=new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
 echo 'error:problem in connection'.$connect__error();
}
else{
 // echo 'connected porperly';
}

//inserting data
$sql="INSERT INTO infos(first_name,last_name,email)
VALUES('SADIA','AMIN','SADIA89@GMAIL.COM')";
 if($connection->query($sql)===TRUE){
  echo 'data went properly';
 }
 else{
  echo 'fatal error';
 }

$connection->close();

?>



