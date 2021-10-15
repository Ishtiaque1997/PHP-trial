<?php
//connection making
$servername='localhost';
$username='root';
$password='';
$dbname='php-first-practice';

try{
 $connection=PDO("mysql:host=$servername;dbname=$dbname",$usernmae,$password)
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//inserting data
$sql="INSERT INTO infos(first_name,last_name,email)
VALUES('SAJID','KHAN','SAJID89@GMAIL.COM')";
$connection-<exec($sql);
echo 'all done';

}
catch(PDOException $e)
{
   echo $e->getMessage(); 
}
$connection->null;
?>



