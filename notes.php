<?php include 'includes/session.php'; ?>
<?php include 'includes/addnote.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Notes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<?php echo @$error; ?>
			<form action="" method="POST">
				<textarea name="note_txt" class="add-note-tarea" placeholder="Write a note"></textarea><br>
				<input type="submit" name="add_note" class="save-note-btn" value="Add note">	
			</form>
			
		</div>
			
				<?php

					$fetch_notes = "SELECT note_id, note_txt, note_date_time FROM notes ORDER BY note_id DESC";
					$result = mysqli_query($conn, $fetch_notes);


					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {

					    	echo '<div id="notes-container">';



					    	//getting fullname
					    	echo '<div class="date-time">';
					        echo $row["note_date_time"];
					        echo '</div>';

					        //getting username
					        echo '<div class="main-post">';
					        echo $row["note_txt"];
					        echo '</div>';

					       

					        echo '</div>';

					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);

				?>

	</div>

</body>
</html>