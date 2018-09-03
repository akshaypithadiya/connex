<?php

include 'connection.php';
include 'userinfo.php';

$sql = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pwd = $row["password"];


$password = $error = ""; // variables to store error message

if (isset($_POST["submit"])) {
	if (empty($_POST["password"])) {
		$error = "Enter password";

	} else {

		// define $password
		$password = $_POST["password"];

		if($password != $pwd){
			$error = "Wrong password entered";
		} else {

			// to protect with MySQL injection
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($conn, $password);

			// SQL query to fetch information of users and finds the user match
			// $user_name taken from userinfo.php
			$sql = "DELETE FROM $tbname WHERE username='$user_name' AND password='$password'";
			$result = mysqli_query($conn, $sql);

			if ($result) {
			    header("location: index.php");
			} else {
			    $error = "Error deleting record: " . mysqli_error($conn);
			}

			mysqli_close($conn);

		}
		
	}
}

?>