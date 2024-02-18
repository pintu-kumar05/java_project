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
    <title>BITS SEWA - <?PHP echo $NAME ?> </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      var html = '<tr><td><input  class="form-control" type="text" name="test_name[]" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();" required></td><td><input class="form-control" type="text" name="test_report[] autocomplete="off""></td><td><select name="rating[]" id="rating"><option value="0">Choose</option><option value="1">GOOD</option><option value="2">AVERAGE</option><option value="3">BAD</option></select></td><td><input class="btn btn-warning" type="button"  id="remove" name="remove" value="Remove"></td></tr>';
      var x = 1;
      $("#add").click(function () {
        $("#table_field").append(html);
        x++;
      });

      $("#table_field").on('click', '#remove', function () {
        $(this).closest('tr').remove();
        x--;
      });
    });
  </script>



<script type="text/javascript">
$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
});
</script>
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
                        <li class="active">
                            <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="anaylsis.php"><i class="fa fa-bar-chart"></i> <span>Patient Analysis</span></a>
                        </li>
                        <li class="">
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
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1" style="padding-top:14px;"><i class="fa fa-address-book-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right" style="padding-top:10px;" >
                                <h5><?php echo $NAME;?></h5>
                                <span class="widget-title1">Name of clinic <i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2" style="padding-top:14px;"><i class="fa fa-phone"></i></span>
                            <div class="dash-widget-info text-right" style="padding-top:10px;">
                                <h5><?php echo $PHONE; ?></h5>
                                
                                <span class="widget-title2">Phone Number <i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3" style="padding-top:14px;"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right" style="padding-top:10px;">
                                <h5> <?php echo $ADDRESS; ?></h5>
                                <span class="widget-title3">Address <i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4" style="padding-top:14px;"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right" style="padding-top:10px;">
                                <h5><?php echo $EMAIL; ?></h5>
                                <span class="widget-title4">Email <i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="row">
                    <div class="col-md-12">
                        <div class="dash-widget">
                            <div class="dash-widget-info text-left">
                                <h5> Add Pateint Details</h5>
                                <p>BITS SEWA suggests: After filling personal deatils of pateints add observations. 
                                    <br> <br>
                                    Choose RATING with TEST REPORTS
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--   <div class="col-md-6">
                   <div class="dash-widget">           
                            <div class="dash-widget-info text-left">
                                <h5> Add Pateints Details</h5>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- patient record section --->
                
                
<div class="row">
<div class="col-md-12">
<form action="clinicdashboard.php" method="POST" autocomplete="off">
      <div class="input-field" style="background-color:white; color:white; ">
        <div >
          <table class="table table-bordered" id="" >
            <tr  >
              <td >
               <label for="p_name">NAME</label>
                <input style="text-transform:uppercase; border: 1px solid black;" class="form-control" type="text" name="p_name" autocomplete="off" placeholder="" onkeyup="this.value = this.value.toUpperCase();" required>
            </td>
            <td>
              <label for="Age">AGE</label>  
              <input style=" border: 1px solid black;"class="form-control" type="number" name="Age" autocomplete="off" placeholder="" required>
            </td>
              <td>
              <label for="p_phone">PHONE NUMBER</label>  
              <input style=" border: 1px solid black;" class="form-control" type="number" name="p_phone" autocomplete="off" placeholder="" required>
            </td>
              <td>
              <label for="p_date">Date</label>
              <input class="form-control" style=" border: 1px solid black;" type="date" name="p_date" id="inputdate" autocomplete="off" placeholder="" required>
            </td> 
            
            
            </tr>
          </table>
        </div>
        <div>
          <table class="table table-bordered" id="">
            <tr  >
              
            <td>
              <label for="p_address">Address</label>
              <input style="text-transform:uppercase; border: 1px solid black;" class="form-control" type="text" name="p_address" autocomplete="off" placeholder="" required>
            </td>
            <td>
              <label for="p_state">State</label> <br>
              <select  name="p_state" style="max-height:200px; height:40px; width: 255px; background-color:white ; outline:none; border: 1px solid black;   overflow:scroll; " required>
    <option value="">Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
            </td>
            <td>
</td>
<td>
</td>
<td>
</td>

<td>
</td>
            </tr>
          </table>
        </div>
        <table  style="background-color:#56bca4;"class="table table-bordered" id="table_field">
          <tr >
            <th>Test Name/Observation</th>
            <th>Test Record/Suggestion</th>
            <th>RATING</th>
            
            <th>Add More</th>
          </tr>
          <tr>
            <td><input  class="form-control" type="text" name="test_name[]" autocomplete="off" onkeyup="this.value = this.value.toUpperCase();" required></td>
            <td><input class="form-control" type="text" name="test_report[]" autocomplete="off" requried></td>
            <td>
            

<select name="rating[]" id="rating">
<option value="0">Choose</option>
  <option value="1">GOOD</option>
  <option value="2">AVERAGE</option>
  <option value="3">BAD</option>
  
</select>
          </td>
            
            
            <!--<td>
            <input type="radio" id="good" name="rating" value="Good">
            <label for="Good">Good</label><br>
            <input type="radio" id="average" name="rating" value="Average">
            <label for="Average">Average</label><br>
            <input type="radio" id="bad" name="rating" value="Bad">
            <label for="Bad">Bad</label>
            </td>-->
            <td><input class="btn btn-primary" id="add" type="button" name="add" value="Add More"></td>
          </tr>
        </table>
      </div>
      
      <center>
        <button type="submit" class="btn btn-success" name="submit_button" id="submit_button">Submit</button>
      </center>
    </form>
</div>
</div>
<!-- php  -->
<?php
if (isset($_POST['submit_button'])) {
  $p_name = $_POST['p_name'];
  $Age = $_POST['Age'];
  $p_phone = $_POST['p_phone'];
  $p_date = $_POST['p_date'];
  $p_address = $_POST['p_address'];
  $p_state = $_POST['p_state'];
  $test_name = $_POST['test_name'];
  $test_report = $_POST['test_report'];
  $rating = $_POST['rating'];

  foreach($test_name as $key => $value){
    $save = "INSERT INTO patient(test_name,test_report,p_address,p_state,p_name,Age,p_phone,p_date,c_phone,rating)VALUES('".$value."','".$test_report[$key]."','$p_address','$p_state','$p_name','$Age','$p_phone','$p_date','$PHONE','".$rating[$key]."')";
  //  echo "p_phone : $p_phone <br>";
   // echo "success <br>";
    $query = mysqli_query($con,$save);
   echo "<script>alert('Report Generated Sucessfully')</script>";
  }
}

?>
        
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