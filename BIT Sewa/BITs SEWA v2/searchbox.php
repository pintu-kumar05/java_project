<?php
include 'dbcon.php'; 
session_start();
if(!isset($_SESSION['patient_phone'])){
    header("location:index.php");
  } 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>BITs SEWA - RESULT</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap"
        rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Custom styles for form-->
    <link href="css/form.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  overflow-x:auto;
}

#customers td, #customers th {
  border: 0px solid #ddd;
  padding: 8px;
  text-align: left;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customer td{
    
}
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #56bca4;
  color: white;
}
</style>
</head>

<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'header.php'; ?>
                </div>
            </div>
    </div>
</header>
<section>
<div class="container">
<div class="row">
    
</div>
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="dash-widget ">
                <h3> MEDICAL REPORT OF PATIENT: </h3>
                            <span class="dash-widget-bg3 mb-5" style="background-color:#55CE63;"><i style="margin-top:13px;" class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
<!-- <p> Rating <br> 1 -> Good <br>2 -> Average <br>3 -> Bad </p> -->
<?php
$PHONE = $_SESSION['patient_phone'];
$DATE = $_SESSION['patient_date'];
//echo "<script>alert('$PHONE')</script>";
//echo "<script>alert('$DATE')</script>";
$sql="SELECT clinic.cname, patient.p_name,patient.p_phone,patient.p_date,patient.test_report,patient.test_name, patient.Rating from clinic INNER JOIN patient on clinic.cphone=patient.c_phone where patient.p_phone = $PHONE and patient.p_date='$DATE'";
//$sql = "SELECT FROM patient_detailes where PPHONE=$phone AND PDATE='$date'";
$result = mysqli_query($con, $sql);
if ($result) {
    echo "<script>alert('Record FOUND for $PHONE')</script>";
    echo "<table border='0px' cellspacing='0' align='center'  id='customers'>";
    echo "<th>";
    echo 'CLINIC / DOCTOR';
    echo "</th>";
    echo "<th>";
    echo 'PATIENT NAME';
    echo "</th>";
    echo "<th>";
    echo 'TEST NAME  / OBSERVATIONS';
    echo "</th>";
    echo "<th>";
    echo 'TEST RECORD / SUGGESTIONS';
    echo "</th>";
    // echo "<th>";
    // echo 'RATING';
    // echo "</th>";
    while($row=mysqli_fetch_array($result)){ 

        $cname = $row[0];
        $p_name = $row[1];
        $p_phone = $row[2];
        $p_date = $row[3];
        $test_report= $row[4];
        $test_name = $row[5];
        // $Rating = $row[6];

        // print_r($row);

        echo "<tr>";
        echo "<td>{$cname}</td>";
        echo "<td>{$p_name}</td>";
        // echo "<td>{$p_phone }</td>";
        // echo "<td>{$p_date}</td>";
        echo "<td>{$test_name}</td>";
        echo "<td>{$test_report}</td>";
        // echo "<td>{$Rating}</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
 
  // print_r($result);
?> 




                                <h3>Hiii <?php echo $PHONE; ?></h3>
                                <span class="widget-title2" >Congratulations we found your results <br> &nbsp DATE <?php echo $DATE ?> <i class="fa fa-check"
                                        aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


</div>

<section>
<!-- <form action="#" method="POST">
              <table>
                <tr>
                  <td>
                    <label for="">From : </label>
                    <input type="date" name="f_date" class="form-control" placeholder="DATE" required>
                  </td>
                  
                  <td>
                    <label for="to">Phone Number : </label>
                    <input type="number" name="p_phone" class="form-control" placeholder="+91" required>
                  </td>
                <tr>
              </table> 



              <button class="btn btn-dark" style="background-color:#56bca4; border:none;" name="search_btn">Search
              </button>
</form> -->

<?php
    $con = new mysqli('localhost', 'root', '', 'v2_bitssewa');
    $query = $con->query("
    SELECT test_name, rating, p_date,test_report FROM patient WHERE p_phone = '$PHONE' AND p_date ='$DATE'; 
  ");

  $test_report = [];
  $p_date = [];
  $month = [];
  $amount = [];

    foreach ($query as $data) {
      $test_report[] = $data['test_report'];
      $p_date[] = $data['p_date'];
      $month[] = $data['test_name'];
      $amount[] = $data['rating'];
    }

    ?>
    <div class="container">
     <div class="row">
        <div class="col-md-12">
        Note: BITS SEWA do not claims any reports and  suggestions all are genertated by expertise of health workers.<br>
        <h3>Analyse your reports : </h3><br>
        
        <h4>GOOD  &nbsp &nbsp &nbsp &nbsp &nbsp:: Satisfactory  <br>
        AVERAGE  &nbsp:: Need Improvement<br>
        BAD&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp:: Not Satisfactory</h4>
</div>
</div>
</div>
   
<center>

    <div class="chartBox" style="height:700px; width:700px;">
    
      <canvas id="myChart"></canvas>
    </div>
</center>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      // setup block
      const labels = <?php echo json_encode($month) ?>;
      const data = {
        // labels: ['SUGAR', 'BLOOD PRESSURE', 'BOPR-33','BOPR-331','BOPR-332','BOPR-333'],
        labels: labels,
        datasets: [{
          label: 'Patient Report Analysis',
          data: <?php echo json_encode($amount) ?>,
          backgroundColor: [
            'rgba(255, 99, 132)',
            'rgba(255, 159, 64)',
            'rgba(255, 205, 86)',
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(153, 102, 255)',
            'rgba(201, 203, 207)'
          ],
          // data: [1,1,2,3,1,2],
          borderWidth: 5
        }]


      };
      //cinfig block



      let delayed;
      const config = {
        type: 'bar',
        data,
        options: {
          animation: {
            onComplete: () => {
              delayed = true;
            },
            delay: (context) => {
              let delay = 0;
              if (context.type === 'data' && context.mode === 'default' && !delayed) {
                delay = context.dataIndex * 100 + context.datasetIndex * 100;
              }
              return delay;
            },
          },

          plugins: {
            chartAreaBorder: {
              borderColor: 'red',
              borderWidth: 20,
              borderDash: [5, 5],
              borderDashOffset: 2,
            },
            <?php
              $i=0;
               while($i < sizeof($test_report)){
                ?>
            tooltip: {
              callbacks: {
                beforeTitle: function (context) {
                  return '<?php echo $test_report[$i]?>'
                },
                title: function (context) {
                  console.log(context)
                },
                afterTitle: function (context) {

                  return '<?php echo json_encode($p_date[$i]) ?>'
                }
              }
            },
            <?php
              $i++;
            }
            ?>

          },
          scales: {
            y: {
              stepSize: 1,
              beginAtZero: true,
              ticks: {
                stepSize: 1,
                callback: function (value, index) {
                  console.log(this.getLabelForValue(index))
                  if (this.getLabelForValue(index) == 1) {
                    return 'GOOD'
                  }
                  else if (this.getLabelForValue(index) == 3) {
                    return 'BAD'
                  }
                  else if (this.getLabelForValue(index) == 2) {
                    return 'AVERAGE'
                  }
                }

              }

            }
          }
        }
      };
      //init  reneder block
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

    </script>



    
            <!--<div class="row">

              <div class="col-12 col-md-6 col-lg-6 col-xl-6">

                <div class="card">

                  <div class="card-body">
                    <div class="chart-title">
                      <h4>Patient Total</h4>
                      <span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last
                        Month</span>
                    </div>
                    <canvas id="linegraph"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <div class="chart-title">
                      <h4>Patients In</h4>
                      <div class="float-right">
                        <ul class="chat-user-total">
                          <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
                          <li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
                        </ul>
                      </div>
                    </div>
                    <canvas id="bargraph"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
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
</section>


<center>
<button class="btn" style="background-color:#56bca4; margin-top:-250px;" ><a href="logout.php" style="color:white;" >Return</a></button>
</center>
</section>


</body>
</html