<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(draw_th_Chart);

      function draw_th_Chart() {
        var data = google.visualization.arrayToDataTable([
          ['Time', 'Temp', 'Hum'],
        //   ['2004',  1000,      400],
        //   ['2005',  1170,      460],
        //   ['2006',  660,       1120],
        //   ['2007',  1030,      540]

          <?php 
                        // include '../mchungaji/funguaGBoxDB.php';
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "iot__smt_edge";
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $query = "SELECT * from climate_table ORDER BY time_stamp ASC LIMIT 20";
                    $exec = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($exec))
                    {
                    // echo "['".$row['temp']."',".$row['hum']."],";
                    // echo "['Temperature',".$row['joto']."],";
                    echo "['{$row['time_stamp']}',{$row['joto']},{$row['unyevu']}],";
                    }

                    $conn->close();
						// include '../mchungaji/funga.php';
				?> 

        ]);

        var options = {
          title: 'indoor Temp, hum vs time',
        //   curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('th_curve_chart'));

        chart.draw(data, options);

        setInterval(function() {
          $.get("index_files/GoogleAPIs/line/alive.php", function(return_value) {
                // data.setValue(0, 1, return_value);
                data.addRow(return_value);
                console.log (return_value);
                // data.addRow(['2021-03-06 18:03:10',40,40],);
                chart.draw(data, options);
          });          
        }, 3000);

      }
    </script>
  </head>
  <body>
    <div id="th_curve_chart" style="width: 100%; height: 100%"></div>
  </body>
</html>
