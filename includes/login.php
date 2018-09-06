<?php

include 'connection.php';

session_start(); 

$username = $password = $error = ""; // variables to store error message

if (isset($_POST["submit"])) {
	if (empty($_POST["username"]) || empty($_POST["password"])) {
		$error = '<div class="error">Enter username and password</div>';
	} else {

		// define $username and $password
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		// to protect with MySQL injection
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);

		// SQL query to fetch information of users and finds the user match
		$sql = "SELECT * FROM $tbname WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		// counting mysql_num_rows and storing it in $count
		$count = mysqli_num_rows($result);

		if ($count == 1) {
			$_SESSION["myusername"] = $username; // initializing session
			header("location: home.php"); // redirecting to other page
		} else {
			$error = '<div class="error">Wrong username or password</div>';
		}
		mysqli_close($conn); // closing connection
	}
}

?>