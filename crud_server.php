<?php 
	session_start();

	
	$id = 0;
	$accept = "";
	$decline = "";
	
	$db = mysqli_connect('localhost','nishika', 'nishika27', 'registration');
	
		 
if (isset($_GET['del'])) 
{
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM donate_now_form WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: crud.php');
}

$results = mysqli_query($db, "SELECT * FROM donate_now_form");

?>