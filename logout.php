<?php
session_start();
if(isset($_SESSION['name']))
{
	session_destroy();
	// echo "<script>location.href='http://localhost/cedcab/login.php'</script>";
	// header("Location: /another-page.php");

header("location:/cedcab/login.php");
exit();
}
?>