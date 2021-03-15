<html>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(draw_Hum_Chart);

      
      function draw_Hum_Chart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          // ['wind speed', 80]
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

                    $query = "SELECT * from climate_table ORDER BY time_stamp DESC LIMIT 1";
                    $exec = mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($exec))
                    {
                    // echo "['".$row['temp']."',".$row['hum']."],";
                    echo "['Humidity',".$row['unyevu']."],";
                    }

                    $conn->close();
						// include '../mchungaji/funga.php';
				?> 
        ]);

        var options = {
          width: 800, height: 240,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('hum_chart_div'));

        chart.draw(data, options);

        // setInterval(function() {
        //   data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
        //   chart.draw(data, options);
        // }, 13000);
        // setInterval(function() {
        //   data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
        //   chart.draw(data, options);
        // }, 5000);

        
        setInterval(function() {
          $.get("index_files/GoogleAPIs/gauge/alive.php?payload=unyevu", function(return_value) {
                data.setValue(0, 1, return_value);
                chart.draw(data, options);
        });
          
        }, 3000);
        
      }
    </script>
  </head>
  <body>
    <div id="hum_chart_div" style="width: 400px; height: 120px;"></div>
  </body>
</html>
