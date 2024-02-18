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
   <?php include 'header.php'; ?>


<?php include 'dbcon.php';  
if (isset($_POST['clinicloginbutton'])) {
    $cphone = $_POST['cphone'];
    $cpass = $_POST['cpass'];   
}

$sql = "SELECT *FROM clinic where cphone=$cphone AND ccreatepass='$cpass'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>alert('Record FOUND')</script>";
    while($rs=mysqli_fetch_assoc($result)){ 
      $a= $rs['CNAME']; 
		$b= $rs['CADDRESS'];


    }
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}



mysqli_close($conn);


?>

 Name: <?php echo $a; ?>
 Address: <?php echo $b; ?>
  </body>
</html>
 








