<!-- <?php
$conn=mysqli_connect('localhost','root','','php');

if($conn==false){
 die("Error:could not connect".mysqli_connect_error());
}
$sql="INSERT INTO information(first_name,last_name,email) VALUES ('learn','hunter','avfr12@gmail.com'),
('learn','hunter','avfr12@gmail.com'),
('learn','hunter','avfr12@gmail.com'),
('learn','hunter','avfr12@gmail.com')";

if(mysqli_query($conn,$sql)){
  echo 'data inserted properly';
}
else{
 echo'wrong';
}
mysqli_close($conn);
?> -->

<?php
$conn=mysqli_connect('localhost','root','','php');
if($conn==false){
 die('Error:could not connect'.mysqli_connect_error());
}
$sql="INSERT INTO "




?>


















