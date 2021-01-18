<?php  

if(isset($_POST['submit'])){
    $p = $_POST['PersonID'];
    $lastname = $_POST['LastName'];
    $firsttname = $_POST['FirstName'];
    $address= $_POST['Address'];
     echo $p;
     echo $lastname;
     echo $firsttname;
     echo $address;
}

$host="localhost";
$user="root";
$password="";
$db = "test2";

$conn = mysqli_connect($host,$user,$password,$db);
if(!$conn)
{
	echo "failed";
}
else
{
	echo "sucess";
}
$sql = "INSERT INTO `Persons` (`PersonID`, `LastName`, `FirstName`, `Address`) VALUES ('$p', '$lastname', '$firsttname', '$address')";
$result = mysqli_query($conn,$sql);

if($result)
{
	echo "1 record inserted";
}
else
{
	echo "failed";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>test form</title>
</head>
<body>
	<form action="#" method="POST">
<label>person ID</label>
<input type="number" name="PersonID" id="pid" placeholder="enter person ID">
<input type="text" name="LastName" id="plname" placeholder="enter person last name">
<input type="text" name="FirstName" id="pfname" placeholder="enter person first name">
<input type="address" name="Address" id="paddress" placeholder="enter address">
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>
