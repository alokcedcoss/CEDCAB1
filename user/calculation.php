<?php
session_start();
$_SESSION['name'];

 $p = $_POST['pic'];
 $b = $_POST['dro'];


$cabtype1 = $_POST['cabtype1'];
$weight = $_POST['luggage1'];
$_SESSION['pic']=$p;
$_SESSION['dro']=$b;
echo $_SESSION['pic'];


echo "Current Location:" . $p . "<br>";
echo "Destination Location: " . $b . "<br>";
echo "Cab Type:" . "$cabtype1" . "<br>";
$pickuppoint='';
$droppoint='';
// ############################################ define an associative array ############################################
$cabarray = $array1 = [
    "Charbagh" => 0,
    "Indira Nagar" => 10,
    "BBD" => 30,
    "Barabanki" => 60,
    "Faizabad" => 100,
    "Basti" => 150,
    "Gorakhpur" => 210,
]; 
// ############################################ Distance Calculation ############################################
global $distance;
foreach ($cabarray as $key => $value) {
    if ($key == $p) {
        $pickuppoint = $value;
    }
}
foreach ($cabarray as $key => $value) {
    if ($key == $b) {
        $droppoint = $value;
    }
}
$distance = abs($droppoint-$pickuppoint);

$_SESSION["distance"]=$distance;
echo $_SESSION["distance"];
echo "Travelling Distance= "."$distance"." KM"."<br>";

// ############################################ Fare Calculation  ############################################
class dd
{ 
    
    function cedmicro($cabtype1, $weight)
    { 
global $distance;
        if ($cabtype1 =='CEDMicro') {
            $fixedRate = 50;
            if ($distance <= 10) {
                $totalfare = $fixedRate + 13.5 * $distance;
            } elseif ($distance > 10 && $distance <= 50) {
                $totalfare = 12 * ($distance - 10) + 185;  
            } elseif ($distance > 50 && $distance <= 100) {
                $totalfare = 10 * 13.5 + 12.0 * 50 + ($distance - 60) * 10.2 + 50;  
            } else {
                $totalfare = 10 * 13.5 + 12 * 50 + 100 * 10.2 + ($distance - 160) * 8.5 + 50;
            }
             echo "\nTotal Fare for this journey: Rs."."$totalfare"."<br>";

            $_SESSION['fare']=$totalfare;
              
            echo $_SESSION['fare'];
}
       
}
function cedmini($cabtype1,$weight)
{
        global $distance;
        if ($cabtype1 =='CEDMini') {
            $fixedRate = 150;
            if ($distance <= 10) {
                $totalfare = $fixedRate + (14.5 * $distance ) + $weight; 
            } elseif ($distance > 10 && $distance <= 50) {
                $totalfare = 13 * ($distance - 10) + 145 + 150 + 100 + $weight;
            } elseif ($distance > 50 && $distance <= 100) {
                $totalfare = 10 * 14.5 + 13 * 50 + ($distance - 60) * 11.2 + 150 + $weight;
            } else {
                $totalfare = 10 * 14.5 + 13 * 50 + 100 * 11.2 + ($distance - 160) * 9.5 + 150 + $weight;}
            echo "\nLuggage Fare" . "=Rs." . "$weight"."<br>";
            echo "\nTotal Fare for this journey: Rs." . "$totalfare"."<br>";
           
           $_SESSION['fare']=$totalfare;
              
           //  echo $_SESSION['fare'];
        } 
    }
function cedroyal($cabtype1,$weight)
{
	global  $distance;
       if ($cabtype1 == 'CEdRoyal') {
            $fixedRate = 200;
            if ($distance <= 10) {
                $totalfare = $fixedRate + 15.5 * $distance + $weight;
            } elseif ($distance > 10 && $distance <= 60) {
                $totalfare = 14 * ($distance - 10 )+ 155 + 200 + $weight;
            } elseif ($distance > 50 && $distance <= 160) {
                $totalfare = (10 * 15.5) + (14 * 50) + (($distance - 60) * 12.2)+ 200 + $weight;
            } else {
                $totalfare = (10 * 15.5) + (14 * 50) + (100 * 12.2)+ (($distance - 160) * 10.5) + 200 + $weight;
            }
            echo "\nTotal Luggage Fare" . "=Rs." . "$weight"."<br>";
            echo "\nTotal Fare for this journey: Rs." . "$totalfare"."<br>";
            
             $_SESSION['fare']=$totalfare;
              
            // echo $_SESSION['fare'];
        }
        }
function cedsuv($cabtype1,$weight)
{
global $distance;
         if ($cabtype1 == 'CEDSUV') {
            $fixedRate = 250;
            if ($distance <= 10) {
                $totalfare = $fixedRate + 16.5 * $distance + (2 * $weight);  
            } elseif ($distance > 10 && $distance <= 50) {
                $totalfare = 15 * ($distance - 10) + 165 + 250 + (2 * $weight);
             
            } elseif ($distance > 50 && $distance <= 100) {
                $totalfare = 10 * 16.5 + 15 * 50 + ($distance - 60) * 13.2 + 250 + (2 * $weight);
               
            } else {
                $totalfare = 10 * 16.5 + 15 * 50 + 100 * 13.2 + ($distance - 160) * 11.5 + 250 + 2 * $weight;
            }
            $weight = 2 * $weight;
            echo "\nLuggage Fare" . "=Rs.$weight"."<br>";
        


            echo "\nTotal Fare for this journey: Rs." . "$totalfare"."<br>";
        

            $_SESSION['fare']=$totalfare;
        
            // echo $_SESSION['fare'];

        }

    }
}
        
$gg = new dd();
$gg->cedmini($cabtype1,$weight);
 $gg->cedmicro($cabtype1, $weight);
 $gg->cedroyal($cabtype1, $weight);
  $gg->cedsuv($cabtype1, $weight);



?>
