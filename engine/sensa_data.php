<?php

$my_db = "iot__smt_edge";
$my_table ="climate_table";

require "connectFile.php"; //connect to database
include "jobless_corner.php"; //select DB, make if not exist

//now lets connect whichever data comes in, if it comes in
if(isset($_GET['temp']) || isset($_GET['hum']))
{
	$temperature = $_GET['temp'];
	$humidity = $_GET['hum'];
	
	echo "You've sent: ".$temperature." , ".$humidity;
	//exit();

	include "seremala.php"; //make this table if it doesnt exist

	$sql = "INSERT INTO $my_table (joto,unyevu)
	VALUES ('$temperature','$humidity')";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} 
	else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close(); //close connection
?>
