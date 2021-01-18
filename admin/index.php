<?php
session_start();
// echo $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../user/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .back
    {
        border:3px solid black;
    padding: 5%;
        text-align: center;
    }
    .g
    {
        background-color: black;
        color: white;
    }

</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
    <div><h2 style="float: left;margin-left: 1%;">CED<span style="color:#ffc001;">CAB</span></h2></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left: 30%; font-size: 20px;">
                <li class="nav-item" >
                    <a class="nav-link active" href="" id="home-admin">Home </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rides
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="" id="riderequest">Ride Requests</a>
                        <a class="dropdown-item" href="completedrides.php" id="completedridesall">Completed Rides</a>
                        <a class="dropdown-item" href="" id="canceledridesall">Canceled Rides</a>
                        <a class="dropdown-item" href="allrides.php" id="allridesadmin">All Rides</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="" id="userrequest">pending User Requests</a>
                        <a class="dropdown-item" href="" id="approveduserrequests">Approved User Requests</a>
                        <a class="dropdown-item" href="allusers.php" id="allusers">All Users</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Location
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="locationdisplay.php" id="managelocation">Location List</a>
                        <a class="dropdown-item" href="locationdisplay.php" id="addlocation">Add New Location</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="" id="resetpassword">Change Password</a>
                        <a class="dropdown-item" href="" id="editprofile">Edit Profile</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-3 my-lg-0" style="float: right;">
            <div class="greetings"></div><p style="color: white;">Hii  <?php echo $_SESSION['name']; ?>
                <a href=logout.php class="btn btn-outline-info my-2 my-sm-0" type="submit">Logout </a>
            </form>
        </div>
    </nav>
    <div class="container"style="padding: 2%;">
    <div class="row"style="padding-bottom: 2%;">
  <div class="col-sm-3 back">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ride Requests</h4>
        
       <center><a href="" class="btn btn-primary">Ride Requests</a></center>
      </div>
    </div>
  </div>
    <div class="col-sm-3 back">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Completed Rides</h4>
        
        <center><a href="completedrides.php" class="btn btn-primary">Completed Rides</a></center>
      </div>
    </div>
  </div>
  
    <div class="col-sm-3 back">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Canceled Rides</h4>
        
        <center><a href="/cedcab/user/cancel.php" class="btn btn-primary">Canceled Rides</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-3  back">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">All Rides</h4>
        
        <center><a href="allrides.php" class="btn btn-primary">All Rides</a></center>
      </div>
    </div>
  </div>
  </div>
<div class="row"style="padding-bottom: 2%;">
  <div class="col-sm-3 back">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pending Users Requests</h4>
        
       <center><a href="/cedcab/user/pendingrides.php" class="btn btn-primary">Pending Users Requests</a></center>
      </div>
    </div>
  </div>
    <div class="col-sm-3 back" >

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Approved users Requests</h4>
        
        <center><a href="/cedcab/user/approvedride.php" class="btn btn-primary">Approved users Requests</a></center>
      </div>
    </div>
  </div>
  
    <div class="col-sm-3 back">

    <div class="card" style="padding:2%;">
      <div class="card-body">
        <h4 class="card-title">All Users</h4>
        
        <center><a href="alluser.php" class="btn btn-primary">All Users</a></center>
      </div>
    </div>
  </div>

  <div class="col-sm-3  back" >

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Serviceable Locations</h4>
        
        <center><a href="locationdisplay.php" class="btn btn-primary">Serviceable Locations</a></center>
      </div>
    </div>
  </div>
  </div>
</div>

  <div class="g">
  <?php include 'footer.php';?>
</div>
</body>
</html>