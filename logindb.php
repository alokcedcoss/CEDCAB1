 
 <?php 
session_start();

 include 'connection.php';
$email = $_POST['email'];
$_SESSION['email']=$email;

$password1 = $_POST['password'];
$_SESSION['password']=$password1;

 $sql ="SELECT * FROM tbl_user WHERE email_id='".$email."' AND password ='".$password1."' LIMIT 1";
// $sql ="SELECT * FROM tbl_user WHERE email_id='aloksrmu96@gmail.com' AND password ='1234' LIMIT 1";
$result = $conn->query($sql);


 if($result->num_rows > 0) 
  {

  while($row = $result->fetch_assoc()) 

  {
    
          
       $name=$row["name"];
     
     if($row["is_admin"]==1)
     {
        $_SESSION['id']=$row["user_id"];
   	 $_SESSION['name']=$name;
      // $_SESSION['name'];
     echo 1;
     }

      else
      {
        $_SESSION['id']=$row["user_id"];
      $_SESSION['name']=$name;
       // $_SESSION['name']; 
     echo 0;
   
     }
}
 }
 else
{

echo 2;
}


$conn->close();

?>