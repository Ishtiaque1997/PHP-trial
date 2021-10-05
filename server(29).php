<html>
<head>
<h1>First program</h1>
</head>
<body>
<?php
echo $_SERVER['PHP_SELF'];//local location
echo "<br>";
echo $_SERVER['SERVER_ADDR'];//gives server address
echo "<br>";
echo $_SERVER['SERVER_NAME'];//gives server name
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//name of php file
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";

  
?>
</body>
</html>
