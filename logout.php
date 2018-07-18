<?php

session_start();

// destroying all sessions
if (session_destroy()) {
	header("location: index.php"); // redirecting to home page
}

?>
