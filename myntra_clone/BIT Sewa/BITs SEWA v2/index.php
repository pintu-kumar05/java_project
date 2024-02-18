<?php
include 'dbcon.php'; 
session_start();
if (isset($_POST['search_btn'])) {
 
  $phone = $_POST['p_phone'];
  $date = $_POST['p_date']; 
 // echo "<script>alert('$phone, $date')</script>";
 // $sql="SELECT clinic.cname, patient.p_name,patient.p_phone,patient.p_date,patient.test_report,patient.test_name from clinic INNER JOIN patient on clinic.cphone=patient.cphone where patient.p_phone = $phone and patient.p_date='$date'";
$sql = "SELECT * FROM patient where p_phone='$phone' AND p_date='$date'";
 $result = mysqli_query($con, $sql);

 if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['patient_phone'] = $row['p_phone'];
      
    $_SESSION['patient_date'] = $row['p_date'];
    header("Location: searchbox.php");
    
}else{
  header("Location: noresult.php");
}
}
else{ 
}

if (isset($_POST['clinicloginbutton'])) {
    $cphone = $_POST['cphone'];
    $cpass = $_POST['cpass'];

    $sql = "SELECT * FROM clinic WHERE cphone = '$cphone' && ccreatepass = '$cpass'";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('result found')</script>";
         $row = mysqli_fetch_assoc($result);
         $_SESSION['pincode'] = $row['cpin'];
         $_SESSION['phone']=$row['cphone'];
         $_SESSION['name']=$row['cname'];
         $_SESSION['email'] = $row['cemail'];
         $_SESSION['add'] = $row['caddress'];
         header("Location: clinicdashboard.php");
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
  <title>BITs SEWA</title> 
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Custom styles for form-->
  <link href="css/form.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  </head>
  <body>
  <header>
     <?php include 'header.php'; ?>
              <li class="nav-item active ">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="aboutus.php"> About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php"> Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="newregistration.php">New Registration</a>
              </li>
             
            </ul>            
          </div>
  </header>
  
  
  
  <section id="home">
    <div class="container-fluid" style="background:url('images/about-img.png')">
      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="d-flex justify-content-center align-items-center mt-5 ">
            <!---login tab-->
            <div class="card" style="background-color:rgba(10,10,10,0.8);">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                  <!----patient/clinic-->
                  <a class="nav-link btl active" id="" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Patient Report</a>
                </li>
                <li class="nav-item text-center">
                  <a class="nav-link btr" id="" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Clinic Login</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <form action="" method="POST">
                    <div class="form px-4 pt-1">
                      <input type="number" name="p_phone" class="form-control" placeholder="Enter Phone Number" requried>
                      <input type="date" name="p_date" class="form-control" placeholder="DATE" requried>
                      <button class="btn btn-dark" style="background-color:#56bca4; border:none;" name="search_btn">Search </button>
                      <p class="pt-1" style="color:white;"> Patients can find suggestions and reports by entering credits given to doctor or clinic.</p>
          
                     
                     
                      <!-- <button class="btn btn-dark" style="background-color:#56bca4; border:none;">Check Medical History</button> -->
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form action="" method="POST">
                    <div class="form px-4" style="color:white;">
                      <input type="text" name="cphone" class="form-control" placeholder="Clinic ID" requried>
                      <input type="password" name="cpass" value="" id="check" class="form-control"
                        placeholder="Password" requried>
                      <!-- An element to toggle between password visibility -->
                      <input type="checkbox" onclick="myFunction()"> &nbsp Show Password
                      <button class="btn btn-dark btn-block"  name="clinicloginbutton"
                        style="background-color:#56bca4; border:none;" >Login</button>
                     </form>
                      </div>
                      <div class=" px-4 pb-5 " style="color:white; margin-top:-86px;"> 
                         <button class="btn btn-danger"  onclick="window.location.href='newregistration.php'">New Registration</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                         <button class="btn btn-dark" >Admin Login </button>
                      </div>

                     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
              

                  <script> function myFunction() {

                      var x = document.getElementById("check");
                      if (x.type === "password") {
                        x.type = "text";
                      } else {
                        x.type = "password";
                      }
                    }
                  </script>
  
  
  
  
  <footer>
  <?php include 'footer.php'; ?>
  </footer>
  
</body>

   <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
    integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>
</html>