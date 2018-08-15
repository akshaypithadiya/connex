<?php

	$sql = "SELECT fname,lname,email,username,about,city FROM users WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);


	$f_name = $row["fname"];
	$l_name = $row["lname"];
	$full_name = $f_name." ".$l_name;
	$user_name = $row["username"];
	$email_address = $row["email"];
	$about_you = $row["about"];
	$current_city = $row["city"];

?>