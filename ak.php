<?php

$con = mysqli_connect("localhost","root","","test");

if (!$con){
	die('Could not connect: ' . mysql_error());
}

if (isset($_POST['note_key'])){

	$note = $_POST['note_key'];
	$datetm = $_POST['datetime_key'];

	$query = "INSERT INTO notes VALUES ('','$note','$datetm')";
	$result = mysqli_query($con,$query) or die (mysqli_error());	    
}


?>