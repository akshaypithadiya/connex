<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Notes</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/notes.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>

	<?php include 'includes/header.php'; ?>
	
	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div id="add-note-container">
			<form action="" method="POST">
				<textarea name="addnote" class="add-note-tarea" placeholder="Write a note"></textarea><br>
				<input type="submit" class="save-note-btn" value="Add note">
			</form>
		</div>

		<div id="notes-container">
			<div class="date-time">
				<?php
					date_default_timezone_set('Asia/Kolkata');
					echo $date = date('d F Y', time())." at ";
					echo $time = date('h:m a', time());
				?>
			</div>
			<div class="main-post">this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro.</div>
		<!--	
			<div class="delete-btn-container">
				<input type="submit" class="delete-btn" value="Delete note">
			</div>
		-->
		</div>


	</div>

</body>
</html>