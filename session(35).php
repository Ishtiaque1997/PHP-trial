<?php
session_start();
?>

<?php

$_SESSION['email']='abdul@gmail.com';

$_SESSION['password']='abdul123';

echo $_SESSION['email']."<br>";
session_unset();//destroy the session
echo $_SESSION['password']."<br>";
?>