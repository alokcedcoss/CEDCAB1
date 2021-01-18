<?php

session_start();
$pic= $_SESSION['pic'];
     $dro= $_SESSION['dro'];
    $dis= $_SESSION['distance'];
    $fare= $_SESSION['fare'];
    $cab= $_SESSION['cabtype1'];
    $distance= $_SESSION['distance'];
    $luggage= $_SESSION['weight'];
    $id= $_SESSION['id'];

    $status=0;
    if($_SESSION['weight']=="")
    {
        $luggage=0;
    }
    else{
       $luggage= $_SESSION['weight'];
    }
    
     $pic."<br>";
     $dro."<br>";
     $fare."<br>";
     $luggage."<br>";
     $cab."<br>";
     require_once 'connection.php';

$sql="INSERT INTO tbl_ride (`ride_date`, `from`, `to`, `total_distance`, `luggage`, `total_fare`, `status`, `customer_user_id`, `cabtype`) VALUES ( NOW(), '$pic', '$dro', '$dis', '$luggage', '$fare','$status', '$id', '$cab')";
     $result= mysqli_query($conn,$sql);
     if($result){
         echo "Your ride is booked pending for Admin approval!";
         header("refresh:1; url=/cedcab/user"); die;


     }else{
        echo "booking Failed!!";
     }

?>