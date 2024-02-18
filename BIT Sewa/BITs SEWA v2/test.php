<?php
  include 'dbcon.php';

  $sql1 = "SELECT *FROM patient WHERE rating=1";

  $result = mysqli_query($con,$sql1);
  $ccount=0;
  while($row = mysqli_fetch_assoc($result)){

    $ccount++;
  }

  $sql1 = "SELECT *FROM patient";

  $result = mysqli_query($con,$sql1);
  $tcount=0;
  while($row = mysqli_fetch_assoc($result)){

    $tcount++;
  }

  echo "cCount : ".$ccount;
  echo "<br>tcount : ".$tcount;

  $result = ($ccount*100)/$tcount;
  echo "<br>Result % : ".round($result);
?>


