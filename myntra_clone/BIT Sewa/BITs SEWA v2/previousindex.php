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
  <style type="text/css">
    .buttonn {
      background-color: white;
      outline: none;
    }

    .buttonn:hover {
      border: none;
      outline: none;
    }

    .buttonn.active {
      background-color: #56bca4;

      color: white !important;
      outline: none;
    }

    #home {}

    #about {
      display: none;
    }

    #services {
      display: none;
    }

    #cregistration {
      display: none;
    }
  </style>

</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <img src="images/logo.png" width="70" height="83"> <a class="navbar-brand" href="#">
          <h3 style="color:#56bca4;">BITS sewa</h3>
          <h5 style="color:black;">Sindri</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav  ml-auto">
            <li class="nav-item">
              <!-- <a class="nav-link" href="">Home</a><span class="sr-only">(current)</span> </a>--->
              <button class="nav-link buttonn" id="button1" style="border:none;" onclick="home()"> Home </button> <span
                class="sr-only">(current)</span>
            </li>
            <li class="nav-item">

              <button class="nav-link buttonn " id="button2" style="border:none;" onclick="about()"> About </button>
            </li>
            <li class="nav-item">
              <button class="nav-link buttonn " id="button3" style="border:none;" onclick="services()"> Services
              </button>
            </li>
            <li class="nav-item">
              <button class="nav-link buttonn " id="button4" style="border:none;" onclick="cregistration()"> New
                Registration </span>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </header>
  <script>

    // get the button elements
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");
    var button3 = document.getElementById("button3");
    var button4 = document.getElementById("button4");

    // add a click event listener to each button
    button1.addEventListener("click", function () {
      // toggle the "active" class on the button
      button1.classList.toggle("active");
      button2.classList.remove("active");
      button3.classList.remove("active");
      button4.classList.remove("active");
    });
    button2.addEventListener("click", function () {
      // toggle the "active" class on the button
      button2.classList.toggle("active");
      button1.classList.remove("active");
      button3.classList.remove("active");
      button4.classList.remove("active");
    });
    button3.addEventListener("click", function () {
      // toggle the "active" class on the button
      button3.classList.toggle("active");
      button2.classList.remove("active");
      button1.classList.remove("active");
      button4.classList.remove("active");
    });
    button4.addEventListener("click", function () {
      // toggle the "active" class on the button
      button3.classList.remove("active");
      button2.classList.remove("active");
      button1.classList.remove("active");
      button4.classList.toggle("active");
    });
  </script>
  <!---HOME---->
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
                  <form>
                    <div class="form px-4 pt-1">
                      <input type="number" name="" class="form-control" placeholder="Enter Phone Number">
                      <input type="date" name="" class="form-control" placeholder="DATE">
                      <button class="btn btn-dark" style="background-color:#56bca4; border:none;">Search </button>
                      <p class="pt-1" style="color:white;"> Reports are aval by entering credits given to clinic.</p>
                      <!-- <button class="btn btn-dark" style="background-color:#56bca4; border:none;">Check Medical History</button> -->
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form action="cliniclogin.php" method="POST">
                    <div class="form px-4" style="color:white;">
                      <input type="text" name="cphone" class="form-control" placeholder="Clinic ID">
                      <input type="password" name="cpass" value="" id="check" class="form-control"
                        placeholder="Password">
                      <!-- An element to toggle between password visibility -->
                      <input type="checkbox" onclick="myFunction()"> &nbsp Show Password
                      <button class="btn btn-dark btn-block" name="clinicloginbutton"
                        style="background-color:#56bca4; border:none;">Login</button>
                        </form>

                        <!--<button class="btn btn-danger" onclick="cregistrationfromhome()" id="buttonnewr">New Registration</button>-->
                        <button class="btn btn-danger">New Registration</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                      <button class="btn btn-dark"">Admin Login</button>
                  

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
                
  <!---ABOUT---->
  <section id="about">
    <div class="container">
      <div class="row">


         
        <div class="col-md-6 mt-5">

          <p style="text-align:justify;" >
            BIT SEWA application that is used to store, manage, and analyze health data and reports. This type of system
            can be used by healthcare providers, patients, and researchers to track and monitor the health status of
            individuals or populations, and to identify trends and patterns in health data.

            The main features of a health report management system typically include the ability to:

            Collect and store health data from various sources, such as electronic health records, medical devices, and
            health surveys
            Organize and classify health data into different categories, such as demographic information, medical
            history, and test results
            Generate and manage health reports, such as patient summaries, diagnostic reports, and treatment plans
            Analyze health data and reports using statistical and data mining techniques, such as regression analysis
            and clustering
            Provide access to health data and reports to authorized users, such as healthcare providers, patients, and
            researchers
            Maintain the security and confidentiality of health data and reports, according to legal and ethical
            guidelines.</p>


        </div>
        <div class="col-md-6 mt-5 ">
          <img style="height:400px; width:450px;"src="images/slider-img.png" class="image-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!---SERVICES---->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mt-5">
       
      </div>
      <div class="col-md-4 mt-5">
        <img src="images/s1.png" class="image-fluid" />
      </div>
      <div class="col-md-4 mt-5">
       
      </div>
      </div>
    </div>
  </section>



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
                <input type="text" class="form-control" id="cownername" name="oname" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cname">Clinic Name </label>
                <input type="text" class="form-control" id="cname" name="cname" placeholder="" required>
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
                <input type="text" class="form-control" id="caddress" name="caddress" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cpin">Pin Code </label>
                <input type="number" class="form-control" id="cpin" name="cpin" placeholder="" required>
              </div>
              <div class="form-group col-lg-3">
                <label for="cphone">State </label>
                <input type="text" class="form-control" id="cstate" name="cstate" placeholder="" required>
              </div>


              <div class="form-group col-lg-3">

              </div>
              <div class="form-group col-lg-3">
                <label for="cpan">PAN Card </label>
                <input type="text" class="form-control" id="cpan" name="cpan" placeholder="" required>
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
                <br><br> Offer : Free Registration till 31st DEC 2022

              </div>
              <div class="form-group col-lg-3">
                <label for="cfee">Payment </label>
                <input type="text" class="form-control" id="cfee" name="cfee" value="1000" placeholder="">
              </div>
              <div class="form-group col-lg-3">
                <div class="btn-box mt-4 ml-5">
                  <button type="submit" class="btn " name="cregisterbutton">Register</button>
                </div>
              </div>
          </form>
  </section>

  <script>
    function cregistrationfromhome() {
      document.getElementById("home").style.display = "none";
      document.getElementById("about").style.display = "none";
      document.getElementById("services").style.display = "none";
      document.getElementById("cregistration").style.display = "block";

    }
    function home() {
      document.getElementById("home").style.display = "block";
      document.getElementById("about").style.display = "none";
      document.getElementById("services").style.display = "none";
      document.getElementById("cregistration").style.display = "none";
    }
    function about() {
      document.getElementById("home").style.display = "none";
      document.getElementById("about").style.display = "block";
      document.getElementById("services").style.display = "none";
      document.getElementById("cregistration").style.display = "none";
    }
    function services() {
      document.getElementById("home").style.display = "none";
      document.getElementById("about").style.display = "none";
      document.getElementById("services").style.display = "block";
      document.getElementById("cregistration").style.display = "none";
    }
    function cregistration() {
      document.getElementById("home").style.display = "none";
      document.getElementById("about").style.display = "none";
      document.getElementById("services").style.display = "none";
      document.getElementById("cregistration").style.display = "block";
    }


  </script>




  <!----   
            <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="" class="form-control wide" id="inputDoctorName">
                  <option value="Normal distribution ">Doctor Name 1</option>
                  <option value="Normal distribution ">Doctor Name 2 </option>
                  <option value="Normal distribution ">Doctor Name 3 </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="" class="form-control wide" id="inputDepartmentName">
                  <option value="Normal distribution ">Cardiology </option>
                  <option value="Normal distribution ">Surgery </option>
                  <option value="Normal distribution ">First Aid </option>
                </select>
              </div>
            </div>


            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="" class="form-control wide" id="inputDoctorName">
                  <option value="Normal distribution ">Doctor Name 1</option>
                  <option value="Normal distribution ">Doctor Name 2 </option>
                  <option value="Normal distribution ">Doctor Name 3 </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="" class="form-control wide" id="inputDepartmentName">
                  <option value="Normal distribution ">Cardiology </option>
                  <option value="Normal distribution ">Surgery </option>
                  <option value="Normal distribution ">First Aid </option>
                </select>
              </div>
            </div>





            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>-->


  <footer>
   <div id="footer"> </div> 
  
  
  <!--?php include 'footer.php'; ?>-->
  </footer>
</body>
<script src="footer.js"></script>
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

</html>