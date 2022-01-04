<?php
$servername = "localhost";
$username = "nishika";
$password = "nishika27";
$db = "registration";
$conn = new mysqli($servername, $username, $password, $db);
if(!$conn)
{
die("error on the connection" .$conn->connect_error);
}
?>
