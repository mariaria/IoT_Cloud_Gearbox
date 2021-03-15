<?php

    // $sql = "CREATE TABLE IF NOT EXIST $my_table (
    //     entry_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     joto VARCHAR(30) NOT NULL,
    //     unyevu VARCHAR(30) NOT NULL,
    //     timestamp timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    //     ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
        
    // if ($conn->query($sql) === TRUE) {
    //     echo "Table $my_table created successfully";
    // } else {
    //     echo "Error creating $my_table table: " . $conn->error;
    // }


    
$mysqli ="CREATE TABLE IF NOT EXISTS {$my_table} (    
    `entry_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `joto` VARCHAR(30) NOT NULL,
    `unyevu` VARCHAR(30) NOT NULL,
    `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  
  //confirm if table was created successfully. 
  if ($conn->query($mysqli) === TRUE) {
    echo "Table {$my_table} created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


?>