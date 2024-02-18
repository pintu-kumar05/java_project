<?php
 include 'dbcon.php';  ?> 
<?php session_start();
 if(!isset($_SESSION['phone'])){

    header("location:index.php");
 
 } ?>
 <?php

 $PHONE = $_SESSION['phone'];
 $NAME = $_SESSION['name'];
 $EMAIL = $_SESSION['email'];
 $PIN = $_SESSION['pincode'];
 $ADDRESS = $_SESSION['add'];
//echo "<script>alert('session phone found')</script>";
//echo "<script>alert('$PIN')</script>";
   

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row['cname']
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <title>BITS SEWA - STACKS <?PHP echo $NAME ?> </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

 
 



</head>

<body>

    <div class="main-wrapper">
        <div class="header" style="background-color:#56bca4;">
            <div class="header-left">
                <a class="logo">
                    <img src="images/logo.png" width="35" height="35" alt=""> <span>BITS SEWA</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars" style="padding-top:14px;"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars" style="padding-top:14px;"></i></a>


            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span><?php echo $NAME; ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <!--<a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right" style="padding-top:14px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i
                        class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!--  <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>-->
                    <a class="dropdown-item" href="logiut.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">BITS SEWA v2.0: Menu</li>
                        <li class="">
                            <a href="clinicdashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="anaylsis.php"><i class="fa fa-bar-chart"></i> <span>Patient Analysis</span></a>
                        </li>
                        <li class="active">
                            <a href="stacks.php"><i class="fa fa-folder"></i> <span>Stacks</span></a>
                        </li>
                        <!--<li>
                            <a href="doctors.html"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>-->

                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1" style="padding-top:14px;"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right" style="padding-top:10px;" >
                                <h5>STACKS FOR :  <?php echo $NAME;?></h5>
                                <span class="widget-title1"><i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    
                   
                    
                </div>


                
                
        
        </div>
            <div class="sidebar-overlay" data-reff=""></div>
            <script src="assets/js/jquery-3.2.1.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery.slimscroll.js"></script>
            <script src="assets/js/Chart.bundle.js"></script>
            <script src="assets/js/chart.js"></script>
            <script src="assets/js/app.js"></script>
    
</body>


<!-- index22:59-->

</html>