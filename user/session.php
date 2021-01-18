<?php 
session_start();
// $_SESSION['name'];
if(!isset($_SESSION['name']))
{
	header('location:login.php');
}
else
{
	header('location:calculation.php');
	
}

?>
