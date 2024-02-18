<?php
include 'dbcon.php';
session_start();

if (isset($_POST['cregisterbutton'])) {
    $oname = $_POST['oname'];
    $cname = $_POST['cname'];
    $cphone = $_POST['cphone'];
    $cemail = $_POST['cemail'];
    $caddress = $_POST['caddress'];
    $cpin = $_POST['cpin'];
    $cstate = $_POST['cstate'];
    $cpan = $_POST['cpan'];
    $ccreatepass = $_POST['ccreatepass'];
    $cconfpass = $_POST['cconfpass'];
    $cfee = $_POST['cfee'];
    $phonequery = "select * from clinic where cphone='$cphone'";
    $query = mysqli_query($con, $phonequery);
    $phonecount = mysqli_num_rows($query);
    $_SESSION['drname'] = $cname;
    if(!isset($_SESSION['drname'])){
      header("location:index.php");
    } 
    if ($phonecount > 0) {
      
        echo "<script>alert('Already having account with BITS SEWA')</script>";
       
    } else {
        if ($ccreatepass === $cconfpass) {
            $sql = "INSERT INTO clinic(oname,cname,cphone,cemail,caddress,cpin,cstate,cpan,ccreatepass,cconfpass,cfee) VALUES ('$oname','$cname',$cphone,'$cemail','$caddress',$cpin,'$cstate','$cpan','$ccreatepass','$cconfpass',$cfee)";
            $result = mysqli_query($con, $sql);
     
            if ($result) {
                echo "<script>alert('Congratulations!! Welcome to BITS SEWA')</script>";

                
            } else {
                echo "Error inserting record: " . mysqli_error($con);
            }
        } 
        
        else {
            echo "<script>alert('Password not matching retry!')</script>";
        }


  }



 

    
    mysqli_close($con);
}

$drname = $_SESSION['drname'];

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
              
  </header>
     


     <!---ABOUT---->
  <section id="about">
    <div class="container">
      <div class="row">


         
        <div class="col-md-6 mt-5">

          <p style="text-align:justify;" >
           
                <center>
                <h3>MESSAGE FROM BITS SEWA</h3>
                    <p> Hello <h5><?php echo $drname; ?></h5><br> Thank you for creating account with us.<br>
                     Your login credientials CLINIC ID and PASSWORD is your phone number and password you have registred with us, which gives access to version 1.0 dashboard.<br><br>
                     Let's use BITS SEWA for human mankind.</p> 
                    
                <center>
                <center>
                <button class="btn " style="background-color:#56bca4; color:;" ><a href="logout.php" style="color:white;" >BITS SEWA HOME</a></button>
                </center>

        </div>
        <div class="col-md-6 mt-5 ">
          <img style="height:400px; width:450px;"src="images/slider-img.png" class="image-fluid" />
        </div>
      </div>
    </div>
  </section>




  
  <footer>
    <?php include 'footer.php';?>
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