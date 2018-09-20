<?php include 'includes/session.php'; ?>
<?php include 'includes/addnote.php'; ?>
<?php include 'includes/userinfo.php'; ?>

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
	<style>
	.svg-icon {
		width: 1.1em;
	  	height: 1.1em;
	  	-webkit-transform: rotate(90deg);
	   	-moz-transform: rotate(90deg);
	    -ms-transform: rotate(90deg);
	    -o-transform: rotate(90deg);
	    transform: rotate(90deg);
	    float: right;
	    cursor: pointer;
	    margin-top: -15px;
	}

	.svg-icon path,
	.svg-icon polygon,
	.svg-icon rect {
		fill: #757575;
	}

	.svg-icon circle {
		stroke: #4691f6;
		stroke-width: 1;
	}
	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>
	
	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div id="add-note-container">
		
			<form action="" method="POST">
				<textarea name="note_txt" class="add-note-tarea" placeholder="Write a note"></textarea><br>
				<input type="submit" name="add_note" class="save-note-btn" value="Save"><?php echo @$error; ?>
			</form>
			
		</div>
			
				<?php

					$fetch_notes = "SELECT note_id, note_txt, note_date_time FROM notes WHERE user_name='$user_name' ORDER BY note_id DESC";
					$result = mysqli_query($conn, $fetch_notes);


					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {

					    	echo '<div id="notes-container">';

					    	echo '<div class="notes-container-header">';
					    		//getting date-time
						    	echo '<div class="date-time">';
						        echo $row["note_date_time"];
						        echo '</div>';

						        echo'<svg class="svg-icon" viewBox="0 0 20 20">
									<path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
									</svg>';

					    	echo '</div>';

					        //getting post
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