<html>
<head>
<h1>First program</h1>
</head>
<body>

<?php
   echo date("d/m/y");//simply display the date
   echo '<br>';
   echo "Today it is".date("d/m/y");
   echo '<br>';
   date_default_timezone_set('Asia/Dhaka');
   echo date ('h:i-a');//simply displays time
   echo '<br>';
   echo date('l');

?>
</body>
</html>
