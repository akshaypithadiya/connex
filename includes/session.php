<?php

include ('connection.php');

session_start();

// storing Session
$username = $_SESSION["myusername"];

// SQL query to fetch complete information of user
$sql = "SELECT username FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$usersession = $row["username"];

if(!isset($usersession)){
	mysqli_close($conn); // closing Connection
	header('location: index.php'); // redirecting to home page
}

?>