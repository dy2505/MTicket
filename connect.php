<?php
$hostname  = 'database-1.czaxtctt3zyr.ap-south-1.rds.amazonaws.com';
$username = 'admin';
$password='123456789';
$dbname = 'admin';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
