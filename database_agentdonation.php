<?php
$servername='localhost';
$username='nishika';
$password='nishika27';
$dbname = "registration";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>