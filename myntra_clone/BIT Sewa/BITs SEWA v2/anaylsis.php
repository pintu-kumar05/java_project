<?php
include 'dbcon.php'; ?>
<?php session_start();
if (!isset($_SESSION['phone'])) {

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


  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <title>BITS SEWA - ANALYSIS
    <?PHP echo $NAME ?>
  </title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
  <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  <style>
    .chartBox {
      width: 900px;
      height:900px;
      margin-left: Opx;
    }
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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
  <script type="text/javascript"> </script>
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
            <li class="active">
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
       <!-- <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="dash-widget">
              <span class="dash-widget-bg4" style="padding-top:14px;"><i class="fa fa-address-book-o"
                  aria-hidden="true"></i></span>
              <div class="dash-widget-info text-right" style="padding-top:10px;">
                <h5>Name:
                  <?php echo $NAME; ?>
                </h5>
                <h5>Phone No:
                  <?php echo $PHONE; ?>
                </h5>
                <h5>Address:
                  <?php echo $ADDRESS; ?>
                </h5>
                <h5>Email:
                  <?php echo $EMAIL; ?>
                </h5>
                <span class="widget-title4">PATIENT ANALYSIS <i class="fa fa-check" aria-hidden="true"></i></span>
              </div>
            </div>
          </div>
        </div>

        <!---SEARCH BOX---->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
          <div class="dash-widget">
            <h1>Fetch Records Of Patient :  </h1>
            <form action="#" method="post">
              <table>
                <tr>
                  <td>
                    <label for="">From : </label>
                    <input type="date" name="f_date" class="form-control" placeholder="DATE" required>
                  </td>
                  <td>
                    <label for="to">To : </label>
                    <input type="date" name="s_date" class="form-control" placeholder="DATE" required>
                  </td>
                  <td>
                    <label for="to">Phone Number : </label>
                    <input type="number" name="p_phone" class="form-control" placeholder="+91" required>
                  </td>
                <tr>
              </table>



              <button class="btn btn-dark" style="background-color:#56bca4; border:none;" name="search_btn">Search
              </button>
            </form>
            <?php
            include 'dbcon.php';

            if (isset($_POST['search_btn'])) {
              $first_date = $_POST['f_date'];
              $second_date = $_POST['s_date'];
              $phone = $_POST['p_phone'];
            } else {
             
              $first_date = '2023-03-27';
              $second_date = '2023-03-27';
              $phone = 11;
             
            }
            echo("<h5>Rating : 0- igonre &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  1- GOOD  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   2-AVERAGE  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   3-BAD</h5>");   
            echo "<table border='1'>";
            $sql = "SELECT *FROM patient WHERE p_date BETWEEN '$first_date' AND '$second_date' AND p_phone=$phone";

            $result = mysqli_query($con, $sql);
    if ($result) {
            echo "<tr border='0px' cellspacing='0' align='center'  id='customers'>";
            // echo "<th >";
            // echo "NAME";
            // echo "</th>";

            // echo "<th >";
            // echo "PHONE";
            // echo "</th>";

            echo "<th>";
            echo "DATE";
            echo "</th>";

            echo "<th>";
            echo "TEST NAME  / OBSERVATIONS";
            echo "</th>";

            echo "<th>";
            echo "TEST RECORD / SUGGESTIONS";
            echo "</th>";

            echo "<th>";
            echo "RATING";
            echo "</th>";

            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              // echo "<td>{$row['p_name']}</td>";
              // echo "<td>{$row['p_phone']}</td>";
              echo "<td>{$row['p_date']}</td>";
              echo "<td>{$row['test_name']}</td>";
              echo "<td>{$row['test_report']}</td>";
              echo "<td>{$row['rating']}</td>";
              echo "</tr>";
              $pppname=$row['p_phone'];
              echo $pppname;
            }

            echo "</table>";
           
          }
          else{
echo "NO DATA FOUND";
          }

            ?>
          
           
          </div>
          </div>
        </div> <br><br><br><br><br><br>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <h1>EDA </h1>
            <!--  -->
    <?php
    $con = new mysqli('localhost', 'root', '', 'v2_bitssewa');
    $query = $con->query("
    SELECT test_name, rating, p_date,test_report FROM patient WHERE p_phone = '$phone' AND p_date BETWEEN '$first_date' AND '$second_date'; 
  ");

    foreach ($query as $data) {
      $test_report[] = $data['test_report'];
      $p_date[] = $data['p_date'];
      $month[] = $data['test_name'];
      $amount[] = $data['rating'];
    }

    ?>

    <div class="chartBox">
      <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      // setup block
      const labels = <?php echo json_encode($month) ?>;
      const data = {
        // labels: ['SUGAR', 'BLOOD PRESSURE', 'BOPR-33','BOPR-331','BOPR-332','BOPR-333'],
        labels: labels,
        datasets: [{
          label: 'Patient Analysis',
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

   



</body>


<!-- index22:59-->

</html>