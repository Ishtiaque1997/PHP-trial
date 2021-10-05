<html>
<head>
<h1>First program</h1>
</head>
<body>
 <form action=""method="POST">
   <input type="text"name="email"placeholder="email address"><br><br>
   <input type="text"name="password"placeholder="password"><br><br>
   <input type="submit"value="done">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  if(empty($email)){
 echo'please insert your email';
}
else{
 echo $email;
 echo '<br>';
 echo $password; 
}
}


  
?>
</body>
</html>
