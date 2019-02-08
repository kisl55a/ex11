<!DOCTYPE html>
    <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>Chart Example</title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    </head>
    <body>
      <?php include "getData.php"; ?>
      <div >
        <h2>Classified Weights</h2>
        <canvas id="myChart"></canvas>
      </div>
      <script>
        //data from databae to variables
        var small=<?php echo json_encode($small); ?>;
        var medium=<?php echo json_encode($medium); ?>;
        var large=<?php echo json_encode($large); ?>;

        /*The chart*/
        var myCanvas = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(myCanvas, {
          type: 'pie',
        	data: {
          labels: ["Small", "Medium", "Large"],
          datasets: [{
            data: [small,medium,large],
            backgroundColor: [
            'red',
            'blue',
            'yellow'
            ],
            borderWidth: 1
            }]
          },
          options:{
            layout: {
              padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
              }
            },
            legend: {
              labels: {
                fontColor: 'black',
                fontSize: 20
              }
            }
          }
        });
      </script>
    </body>
    </html>