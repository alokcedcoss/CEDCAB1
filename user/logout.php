<?php
session_start();
if(isset($_SESSION['name']))
{
	session_destroy();
	session_unset();
	header('location:/cedcab/login.php');
}


?>