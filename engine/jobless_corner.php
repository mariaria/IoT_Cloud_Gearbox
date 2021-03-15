<?php

// Make my_db the current database
$db_selected = mysqli_select_db($conn, $my_db);

if (!$db_selected) {
  // If we couldn't, then it either doesn't exist, or we can't see it.
  $sql = 'CREATE DATABASE '.$my_db;

  if (mysqli_query($conn, $sql)) {
      echo "Database $my_db created successfully\n";
	  $db_selected = mysqli_select_db($conn, $my_db);
	  if (!$db_selected) {
		  echo "in da $my_db";
	  }
  } 
  else {
      echo 'Error creating database: ' .$mysqli -> connect_error . "\n";
  }
}

?>