<!-- 
  <?php
 include 'dbcon.php'; 
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHART TEST</title>
    <style>
        .chartBox{
            width:700px;

        }
        </style>
</head>
<body>
<?php 
  $con = new mysqli('localhost','root','','v2_bitssewa');
  $query = $con->query("
    SELECT test_name, rating, p_date,test_report FROM patient WHERE p_phone = '9155940740' AND p_date BETWEEN '2023-04-03' AND '2023-04-04'; 
  ");

  foreach($query as $data)
  {
    $test_report[]=$data['test_report'];
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
 const data={
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
const config={
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
    
        plugins:{
          chartAreaBorder: {
        borderColor: 'red',
        borderWidth: 20,
        borderDash: [5, 5],
        borderDashOffset: 2,
      },
            tooltip:{
                
                callbacks:{
                    beforeTitle: function(context){
                        return '<?php echo json_encode($test_report) ?>'
                    },
                    title: function(context){
                        console.log(context)
                    },
                    afterTitle:function(context){
                        
                        return '<?php echo json_encode($p_date) ?>'
                    }
                }
            },
         
        },
      scales: {
        y: {
            stepSize:1,
          beginAtZero: true,
          ticks:{
            stepSize:1,
            callback: function(value, index){
                console.log(this.getLabelForValue(index))
                if(this.getLabelForValue(index)==1){
                    return 'GOOD'
                }
                else if(this.getLabelForValue(index)==3){
                    return 'BAD'
                }
                else if(this.getLabelForValue(index)==2){
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
    





</body>
</html> -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHART TEST</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <style>
      .chartheight{
   height:200px;
   width:200px;
      }
      </style>
</head>
<body>
<div class="chartheight">
  <canvas  id="myChart"></canvas>
</div>
<?php
    $con = new mysqli('localhost', 'root', '', 'v2_bitssewa');
    $queryage =("
    select sum(case when Age <= 20 then 1 else 0 end) as range1, sum(case when Age > 20 and Age <= 40 then 1 else 0 end) as range2, sum(case when Age > 40 and Age <= 200 then 1 else 0 end) as range3 from patient where p_state='JH'; 
  ");
  $result = mysqli_query($con, $queryage);
  if ($result){

    
    while ($row = mysqli_fetch_assoc($result)) {
      
       $Age1= $row['range1'];
       $Age2= $row['range2'];
       $Age3= $row['range3'];
    echo $Age1; 
    echo $Age2; 
    echo $Age3; 

    }
  
  }
    

    ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  
  //setup block 
const data ={
  //labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
  labels: ['Child', 'Adult', 'Old'],
      datasets: [{
        label: '# of Votes',
        data: [<?php echo $Age1?>, <?php echo $Age2?>, <?php echo $Age3?>],
        borderWidth: 1
      }]
};
//config block 
const config={
  type: 'pie',
  data,
    options: {
      rotation:10,
    }
  };

  //render block
  const myChart = new Chart(
    document.getElementById('myChart'),
    config 

  );

</script>








</body>
</html>