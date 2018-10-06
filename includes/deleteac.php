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
		$error = '<div class="error">Enter password</div>';

	} else {

		// define $password
		$password = $_POST["password"];

		if($password != $pwd){
			$error = '<div class="error">Wrong password entered</div>';
		} else {

			// to protect with MySQL injection
			$password = stripslashes($password);
			$password = mysqli_real_escape_string($conn, $password);

			// SQL query to fetch information of users and finds the user match
			// $user_name taken from userinfo.php
			$del_user = "DELETE FROM users WHERE username='$user_name' AND password='$password'";
			$result = mysqli_query($conn, $del_user);

			$del_notes = "DELETE FROM notes WHERE user_name='$user_name'";
			$result = mysqli_query($conn, $del_notes);

			$del_posts = "DELETE FROM posts WHERE user_name='$user_name'";
			$result = mysqli_query($conn, $del_posts);

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