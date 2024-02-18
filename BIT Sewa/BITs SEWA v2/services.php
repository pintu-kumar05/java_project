<?php
include 'dbcon.php';
//DATE
$FROM = '2023-04-01';
$TO = '2023-04-30';

//1 jharkhand
$sql = "SELECT DISTINCT p_phone, p_date FROM patient WHERE p_state = 'JH' AND p_date BETWEEN'$FROM' AND '$TO'";
$resultJH = mysqli_query($con, $sql);
$countjh = 0;
while ($row = mysqli_fetch_assoc($resultJH)) {
  $countjh++;
}
//2 jharkhand
$sql1 = "SELECT test_name, COUNT(test_name) AS `value_occurrence` FROM patient where p_state ='JH' GROUP BY test_name ORDER BY `value_occurrence` DESC LIMIT 1;";
$resultJH1 = mysqli_query($con, $sql1);
while ($row = mysqli_fetch_assoc($resultJH1)) {
  $testjh = $row['test_name'];
}
//3 jharkhand
$sql1 = "SELECT count(cstate) FROM `clinic` WHERE cstate ='Jharkhand'";
$resultJH2 = mysqli_query($con, $sql1);
$ccountjh = 0;
while ($row = mysqli_fetch_assoc($resultJH2)) {
  $ccountjh++;
}

//1 bihar
$sql = "SELECT DISTINCT(p_phone) FROM patient WHERE p_state = 'BR' AND p_date BETWEEN'$FROM' AND '$TO'";
$resultBR = mysqli_query($con, $sql);
$countbr = 0;
while ($row = mysqli_fetch_assoc($resultBR)) {
  $countbr++;
}
$sql1 = "SELECT test_name, COUNT(test_name) FROM patient WHERE p_state='BR'";
$resultBR1 = mysqli_query($con, $sql1);
while ($row = mysqli_fetch_assoc($resultBR1)) {
  $testbr = $row['test_name'];
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
  <script src="js/zingchart.min.js"></script>
  <link rel="stylesheet" href="css/chart.css">
  <!-- for pie chart -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chartheight {
      height: 260px;
      width: 300px;
    }
  </style>
  <!-- for pie chart -->
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
    <li class="nav-item active">
      <a class="nav-link" href="services.php"> Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="newregistration.php">New Registration</a>
    </li>
    </ul>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        Welcome to our STAR SERVICE! <br> <br>Our system is designed to simplify the process of managing and accessing
        medical test reports. We understand that managing medical reports can be a time-consuming and complex task,
        which is why we have developed an intuitive system that can help you manage and access your medical test reports
        in a hassle-free manner.
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div id="myChart" class="chart--container" style=" height:800px;">
          <!-- <a class="zc-ref" href="https://www.zingchart.com/">srggrsgrs</a> -->
        </div>
        <!-- <script src="js/chart.js"></script> -->
      </div>

      <div class="col-md-6">
        <p>

          <br>
          Here are some of the key features of our medical test report management system:<br><br>

          1. Secure and reliable storage: We understand that the confidentiality and security of your medical test
          reports are of utmost importance. Our system uses the latest encryption and security technologies to ensure
          that your medical test reports are securely stored and accessed only by authorized users.<br><br>

          2. Easy report retrieval: Our system makes it easy to retrieve medical test reports. You can access your
          reports from anywhere and at any time, using any device with an internet connection. This makes it easy to
          share reports with healthcare professionals or family members.<br><br>

          3. User-friendly interface: Our system is designed to be user-friendly and intuitive, making it easy for
          anyone to use. Whether you are a healthcare professional or a patient, you can easily navigate our system and
          access your medical test reports.<br><br>

          4. Integration with healthcare systems: Our system is designed to integrate seamlessly with other healthcare
          systems. This means that your medical test reports can be easily accessed by healthcare professionals,
          reducing the need for repeated tests and improving patient care.<br><br>

          5. Customizable reporting: Our system allows for customized reporting, enabling you to generate reports that
          meet your specific needs. This can be especially useful for healthcare professionals who need to track patient
          progress or for patients who want to monitor their health over time.<br><br>


        </p>
      </div>
      <p>At our system, we are committed to making your life easier. Whether you are a healthcare professional or a
        patient, our system can help you manage and access your medical test reports in a hassle-free manner. Contact us
        today to learn more about our system and how it can benefit you.</p>

    </div>
    <div class="row">

      <div class="col-md-7">
        <p>The pie chart is representing age-wise distribution of patient in Jharkhand state
          with
          each slice representing a different age group. The size of each slice would be proportional to the count 
          of
          the population that falls within that age group. <br> <br>

          The colors used to represent each age group would typically be different to make it easier to differentiate
          between them. Additionally, there might be a legend or labels that provide more information about each age
          group
          and its corresponding slice on the chart.

          <br>
          <br>
          In this chart there are three age groups divides 0-20(CHILD), 21-40(ADULT) and 41+(OLD). One can hover on pie chart for better
          understanding.
          <br>
          <br>
          Our system is designed to be user-friendly and intuitive, making it easy for
          anyone to use. Whether you are a healthcare professional or a patient, you can easily navigate our system and
          access your medical test reports.
       
      </div>
      <div class="col-md-5">
        <div class="chartheight">
          <p style=" padding-left:50px;">Jharkhand Statistics</p>
          <canvas id="myChart1"></canvas>

        </div>
      </div>
    </div>
    

    
    <!-- pie chart php start-->
    <?php
    $con = new mysqli('localhost', 'root', '', 'v2_bitssewa');
    $queryage = ("
    select sum(case when Age <= 20 then 1 else 0 end) as range1, sum(case when Age > 20 and Age <= 40 then 1 else 0 end) as range2, sum(case when Age > 40 and Age <= 200 then 1 else 0 end) as range3 from patient where p_state='JH' AND p_date BETWEEN '$FROM' AND '$TO'  ; 
  ");
    $result1 = mysqli_query($con, $queryage);
    if ($result1) {


      while ($row1 = mysqli_fetch_assoc($result1)) {

        $Age1 = $row1['range1'];
        $Age2 = $row1['range2'];
        $Age3 = $row1['range3'];


      }

    }


    ?>
  </div>

  <div class="row">
    <div class="col-md-12">

    </div>

  </div>



  </div>
  <!-- pie chart php end-->
  <!-- script for pie chart start-->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>

    //setup block 
    const data = {
      //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      labels: ['Child', 'Adult', 'Old'],
      datasets: [{
        label: '',
        data: [<?php echo $Age1 ?>, <?php echo $Age2 ?>, <?php echo $Age3 ?>],
        borderWidth: 1
      }]
    };
    //config block 
    const config = {
      type: 'pie',
      data,
      options: {
        rotation: 10,
      }
    };

    //render block
    const myChart = new Chart(
      document.getElementById('myChart1'),
      config

    );

  </script>
  <!-- script for pie chart end -->
  <!-- script for map -->
  <script>
    let chartConfig = {
      shapes: [
        // for whole world map 
        //   {
        //   type: 'zingchart.maps',
        //   options: {
        //     bbox: [67.177, 36.494, 98.403, 6.965], // get bbox from zingchart.maps.getItemInfo('world-countries','ind');
        //     ignore: ['IND'], // ignore India because we are rendering a more specific India map below
        //     name: 'world.countries',
        //     panning: false, // turn of zooming. Doesn't work with bounding box
        //     style: {
        //       tooltip: {
        //         borderColor: '#000',
        //         borderWidth: '2px',
        //         fontSize: '18px'
        //       },
        //       controls: {
        //         visible: false // turn of zooming. Doesn't work with bounding box
        //       },
        //       hoverState: {
        //         alpha: .28
        //       }
        //     },
        //     zooming: false // turn of zooming. Doesn't work with bounding box
        //   }
        // },

        //   for only india map 
        {
          type: 'zingchart.maps',
          options: {
            name: 'ind',
            panning: false, // turn of zooming. Doesn't work with bounding box
            zooming: true,
            scrolling: true,
            style: {
              tooltip: {
                borderColor: '#000',
                borderWidth: '2px',
                fontSize: '18px'
              },
              borderColor: 'black',
              borderWidth: '2px',
              controls: {
                visible: false, // turn of zooming. Doesn't work with bounding box

              },
              hoverState: {
                alpha: .28
              },

              //Andaman and Nicobar Islands
              items: {
                // AN: {
                //   tooltip: {
                //     text: 'Total patient count: <?php echo '' ?>  <br> Highest on demand test: <?php echo '' ?>  <br>  Total BITS SEWA user: <?php echo '0' ?>',
                //     backgroundColor: '#ff9800'
                //   },
                //   backgroundColor: '#ff9800',
                //   label: {
                //     visible: true
                //   }
                // },






                // Andhra Pradesh
                // AP: {
                //   tooltip: {
                //     text: 'Maharashtra has 2,683 monthly users total',
                //     backgroundColor: '#ff9800'
                //   },
                //   backgroundColor: '#ff9800',
                //   label: {
                //     visible: true
                //   }
                // },
                // AD: {
                //   tooltip: {
                //     text: 'Maharashtra has 2,683 monthly users total',
                //     backgroundColor: '#ff9800'
                //   },
                //   backgroundColor: '#ff9800',
                //   label: {
                //     visible: true
                //   }
                // },


                // KA: {
                //   tooltip: {
                //     text: 'Karnataka has 2,851 monthly users total',
                //     backgroundColor: '#ff5722'
                //   },
                //   backgroundColor: '#ff5722',
                //   fontSize: '100px',
                //   label: {
                //     visible: true
                //   }
                // },
                BR: {
                  tooltip: {
                    text: 'Total patient count: <?php echo $countbr ?> <br> Highest on demand test: <?php echo $testbr ?>',
                    backgroundColor: '#ff9800'
                  },
                  backgroundColor: '#01ad9c',
                  label: {
                    visible: true
                  }
                },
                //Jharkhand
                JH: {
                  tooltip: {
                    text: 'Total patient count: <?php echo $countjh ?>  <br> Frequent test: <?php echo $testjh ?>  <br>   BITS SEWA user: <?php echo $ccountjh ?>',

                    backgroundColor: '#2e2e2e',
                    fontColor: 'white'

                  },
                  backgroundColor: '#3fc1c9',
                  label: {
                    visible: true
                  }
                },

                //   Maharastra 
                // MH: {
                //   tooltip: {
                //     text: 'Maharashtra has 2,683 monthly users total',
                //     backgroundColor: '#ff9800'
                //   },
                //   backgroundColor: '#ff9800',
                //   label: {
                //     visible: true
                //   }
                // },

                // //   telangana
                // TL: {
                //   tooltip: {
                //     text: 'Telangana has 1,494 monthly users total',
                //     backgroundColor: '#00AE4D'
                //   },
                //   backgroundColor: '#00AE4D',
                //   label: {
                //     visible: true
                //   }
                // },

                // //   tamilnadu
                // TN: {
                //   tooltip: {
                //     text: 'Tamil Nadu has 1,968 monthly users total',
                //     backgroundColor: '#00bcd4'
                //   },
                //   backgroundColor: '#00bcd4',
                //   label: {
                //     visible: true
                //   }
                // }
              },
              label: { // text displaying. Like valueBox
                fontSize: '15px',
                visible: false
              }
            }
          }
        }
      ]
    };

    zingchart.loadModules('maps,maps-ind,maps-world-countries');
    zingchart.render({
      id: 'myChart',
      data: chartConfig,
      height: '100%',
      width: '100%',
    });

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