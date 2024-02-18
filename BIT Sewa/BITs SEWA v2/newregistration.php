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
  <style type="text/css" rel="stylesheet ">
/* .style{max-height:200px !important; height:46px !important; width:255px;background-color:#deece9; border:none; border-radius:4px; outline:none !important; overflow:scroll !important; } */
  </style>
</head>

<body>
  <header>
    <?php include 'header.php'; ?>
    <li class="nav-item  ">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="aboutus.php"> About Us</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="services.php"> Services</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="newregistration.php">New Registration</a>
    </li>
    </ul>
    </div>
  </header>




  <section class="book_section layout_padding" id="cregistration">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="clinicregistration.php" method="POST">
            <h4>
              <span class="design_dot"></span>
              NEW REGISTRATION
            </h4>

            <div class="form-row">
              <div class="form-group col-lg-3">
                <label for="cownername">Owner's Name </label>
                <input style="text-transform:uppercase;" type="text" class="form-control" id="cownername" name="oname"
                  placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cname">Clinic / Doctor Name </label>
                <input style="text-transform:uppercase;" type="text" class="form-control" id="cname" name="cname"
                  placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cphone">Phone Number </label>
                <input type="number" class="form-control" id="cphone" name="cphone" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cemail">Email ID</label>
                <input type="email" class="form-control" id="cemail" name="cemail" placeholder="" required>
              </div>

              <div class="form-group col-lg-3">

              </div>
              <div class="form-group col-lg-3">
                <label for="caddress">Address </label>
                <input style="text-transform:uppercase;" type="text" class="form-control" id="caddress" name="caddress"
                  placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cpin">Pin Code </label>
                <input type="number" class="form-control" id="cpin" name="cpin" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cstate">State </label> <br>
                <!-- <select  name="cstate" style="max-height:200px; height:46px; width:255px;background-color:#deece9; border:none; border-radius:4px; outline:none; overflow:scroll; " > -->
                <select name="cstate" class="style form-control" style="max-height:120px;background-color:red;z-index:111111111">
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
              </div>


              <div class="form-group col-lg-3">

              </div>
              <div class="form-group col-lg-3">
                <label for="cpan">PAN Card </label>
                <input style="text-transform:uppercase;" type="text" class="form-control" id="cpan" name="cpan"
                  placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="ccreatepass">Create Password </label>
                <input type="password" class="form-control" id="ccreatepass" name="ccreatepass" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cconfpass">Confirm Password </label>
                <input type="password" class="form-control" id="cconfpass" name="cconfpass" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">

              </div>
              <div class="form-group col-lg-3">
                <br><br> Offer : Free Registration

              </div>
              <div class="form-group col-lg-3">
                <label for="cfee">Payment </label>
                <input type="text" class="form-control" id="cfee" name="cfee" value="1000" placeholder="">
              </div>
              <div class="form-group col-lg-3">
                <div class="btn-box mt-4 ml-5">
                  <button type="submit" class="btn" onclick="matchPassword()" name="cregisterbutton">Register</button>
                </div>
              </div>
          </form>
  </section>




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