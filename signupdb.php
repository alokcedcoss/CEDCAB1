<?php 

include "connection.php";
$email= $_POST['email'];
 $name= $_POST['name'];
 $mobile= $_POST['mobile'];
$password= $_POST['password'];

echo "$email";
echo "$name";
echo "$password";
echo "$mobile";
  // $_SESSION['name']=$name;
 // echo $_SESSION['name'];
 $sql ="INSERT INTO tbl_user(email_id,name,dateofsignup,mobile,status, password,is_admin) VALUES ('$email', '$name', NOW(), '$mobile', '0', '$password', '0')";

$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();


 ?>