<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'v2_bitssewa';

$con = mysqli_connect($hostname, $username, $password, $database);

if ($con) {
 //   echo ("CONNECTION DONE");
} else {
    echo ("Connection failed: " . mysqli_connect_error());
    //die("Connection failed: " . mysqli_connect_error());
}
?>
<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    window.history.forward();
  </script>
