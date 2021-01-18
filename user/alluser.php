<?php 
session_start();
if(!isset($_SESSION['name'])){
  header("Location:login.php");
}
require_once 'connection.php';
$query= "SELECT * FROM `tbl_user`";
$results = mysqli_query($conn,$query);
$records = mysqli_num_rows($results);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<div >
<?php include "header.php"?></div>
<div class="container  ">
<table class="table" id="myTable">
    <thead>
      <tr>
      <th>ID</th>
        <th> Email ID</th>
        <th> Name</th>
        <th>Date</th>
       <th>Mobile Number</th>
       <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
          <?php
          
               if(!empty($records)){
                   while($row= mysqli_fetch_assoc($results))
                   {
                       ?>
                         <tr>
                         <th><?php echo $row['user_id']?></th>
                             <td><?php echo $row['email_id']?></td>
                             <td><?php echo $row['name']?></td>
                                <td><?php echo $row['dateofsignup']?></td>
                                <td><?php echo $row['mobile']?></td>
                              
                               
        
                                <td>
                                 <select>
                                     <option>enable</option>
                                     <option>disable</option>
                                 </select>
                                 </td>
                                </tr>

                                <?php
                   }
               }
          
          ?>




          
      
     
    </tbody>
  </table>
</div>