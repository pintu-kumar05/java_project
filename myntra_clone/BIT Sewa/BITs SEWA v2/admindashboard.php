<?php
 include 'dbcon.php'; 

 $sql = "SELECT DISTINCT(p_date) FROM patient WHERE p_state = 'JHARKHAND' AND p_date BETWEEN'2023-04-01' AND '2023-05-30'";

 $result = mysqli_query($con,$sql);

 $count = 0;
 while($row = mysqli_fetch_assoc($result)){
  
  $count++;
 }
 ?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <title>patient counts</title>
		<script src="js/zingchart.min.js"></script>
        <link rel="stylesheet" href="css/chart.css">
	</head>
	<body>
		<div id="myChart" class="chart--container">
			<!-- <a class="zc-ref" href="https://www.zingchart.com/">srggrsgrs</a> -->
		</div>
        <!-- <script src="js/chart.js"></script> -->
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
              visible:false, // turn of zooming. Doesn't work with bounding box
  
            },
            hoverState: {
              alpha: .28
            },

            //   Andhra Pradesh
            

            // Karnataka
            items: {

              AP: {
                tooltip: {
                  text: 'Maharashtra has 2,683 monthly users total',
                  backgroundColor: '#ff9800'
                },
                backgroundColor: '#ff9800',
                label: {
                  visible: true
                }
              },

              

              AD: {
                tooltip: {
                  text: 'Maharashtra has 2,683 monthly users total',
                  backgroundColor: '#ff9800'
                },
                backgroundColor: '#ff9800',
                label: {
                  visible: true
                }
              },

              JK: {
                tooltip: {
                  text: 'Maharashtra has 2,683 monthly users total',
                  backgroundColor: '#ff9800'
                },
                backgroundColor: '#ff9800',
                label: {
                  visible: true
                }
              },
              KA: {
                tooltip: {
                  text: 'Karnataka has 2,851 monthly users total',
                  backgroundColor: '#ff5722'
                },
                backgroundColor: '#ff5722',
                fontSize:'100px',
                label: {
                  visible: true
                }
              },

              //Jharkhand
              JH: {
                tooltip: {
                  text: 'Karnataka has <?php echo $count?> monthly users total',
                  backgroundColor: '#ff5722'
                  
                },
                backgroundColor: 'green',
                label: {
                  visible: true
                }
              },

            //   Maharastra 
              MH: {
                tooltip: {
                  text: 'Maharashtra has 2,683 monthly users total',
                  backgroundColor: '#ff9800'
                },
                backgroundColor: '#ff9800',
                label: {
                  visible: true
                }
              },

            //   telangana
              TL: {
                tooltip: {
                  text: 'Telangana has 1,494 monthly users total',
                  backgroundColor: '#00AE4D'
                },
                backgroundColor: '#00AE4D',
                label: {
                  visible: true
                }
              },

            //   tamilnadu
              TN: {
                tooltip: {
                  text: 'Tamil Nadu has 1,968 monthly users total',
                  backgroundColor: '#00bcd4'
                },
                backgroundColor: '#00bcd4',
                label: {
                  visible: true
                }
              }
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
	</body>
</html>