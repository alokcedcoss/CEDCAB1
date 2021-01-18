<?php 
include "connection.php";


	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$distance = $_POST['distance'];
		$is_available=$_POST['is_available'];
	$user_id = $_POST['id'];

	
		$sql ="UPDATE tbl_location SET name='".$name."',distance ='".$distance."',is_available ='".$is_available."' WHERE id ='$user_id'";

		
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}



if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	$sql = "SELECT * FROM `tbl_location` WHERE `id`='$user_id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$name = $row['name'];
			$distance= $row['distance'];
			$is_available=$row['is_available'];
			}
		}
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style>
        body
        {
            background-color:grey;
            text-align: center;
        }
        .b
        {
            border:px inset red;
            width: 60%;
            margin-left:18%;
            padding: 3%;
            background-color:#5a84cd;
            color: black;
        }
    </style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	</head>
	<body>
		<h2>User Update Form</h2>
		<div class="b">
		<form action="" method="post">
	  <div class="form-group">
		   
		    <label>Name:<br></label>
		    <input type="text" class="form-control" name="" value="<?php echo $name; ?>">
		    <input class="form-control" type="hidden" name="user_id" value="<?php echo $id; ?>">
		    <br>
		   
		   <label>Distance:<br></label>
		   	<input class="form-control" type="text" name="" value="<?php echo $distance; ?>">
		    <br>
		   <label>Available:<br></label>
		   	<input class="form-control" type="number" name="available" value="<?php echo $is_available; ?>">
		    <input class="btn btn-info" type="submit" value="submit" name="update">
		     <input class="btn btn-success" type="button" onclick="window.location.href='locationdisplay.php';" value="Show Record" />
	</div>
</form>
</body>
</html>