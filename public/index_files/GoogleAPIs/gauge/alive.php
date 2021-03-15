<?php 
                $payload=$_GET['payload'];
                // include '../mchungaji/funguaGBoxDB.php';
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "iot__smt_edge";
                // Create connection
                $c_onn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($c_onn->connect_error) {
                die("Connection failed: " . $c_onn->connect_error);
                }

                $query = "SELECT * from climate_table ORDER BY time_stamp DESC LIMIT 1";
                $exec = mysqli_query($c_onn,$query); 

                while($row = mysqli_fetch_array($exec))
                {
                // echo "['".$row['temp']."',".$row['hum']."],";
                // echo "['humidity',".$row['hum']."],";
                echo $row[$payload];
                // echo "22";
                }
                
                $c_onn->close();
                // include '../mchungaji/funga.php';
            ?>