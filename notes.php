<?php include 'includes/session.php'; ?>
<?php include 'includes/addnote.php'; ?>
<?php include 'includes/deletenote.php'; ?>
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
	/* -----
	SVG Icons - svgicons.sparkk.fr
	----- */

	.svg-icon {
	  width: 12px;
	  height: 12px;
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

	.del-btn{
		float: right;
		padding: 0px;
		cursor: pointer;
		outline: none;
		background: transparent;
		border: 0px;
		margin-right: -2px;
		margin-top: -14px;
	}
	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>
	
	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div id="add-note-container">
		
			<form action="" method="POST">
				<textarea name="note_txt" class="add-note-tarea" maxlength="200" placeholder="Write a note"></textarea><br>
				<input type="submit" name="add_note" class="save-note-btn" value="Save"><?php echo @$error; ?>
			</form>
			
		</div>
			
				<?php

					$fetch_notes = "SELECT note_id, note_txt, note_date_time FROM notes WHERE user_name='$user_name' ORDER BY note_id DESC";
					$result = mysqli_query($conn, $fetch_notes);


					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
					    	$noteid = $row["note_id"];
					    	echo '<div id="notes-container">';

					    	echo '<div class="notes-container-header">';
					    		//getting date-time
						    	echo '<div class="date-time">';
						        echo $row["note_date_time"];
						        echo '</div>';

						    	echo '<form action="" method="POST">';
						    	echo '<input type="hidden" name="noteid" value="'.$noteid.'">';
								echo '<button type="submit" name="del" class="del-btn"><svg class="svg-icon" viewBox="0 0 20 20">
										<path fill="none" d="M11.469,10l7.08-7.08c0.406-0.406,0.406-1.064,0-1.469c-0.406-0.406-1.063-0.406-1.469,0L10,8.53l-7.081-7.08
										c-0.406-0.406-1.064-0.406-1.469,0c-0.406,0.406-0.406,1.063,0,1.469L8.531,10L1.45,17.081c-0.406,0.406-0.406,1.064,0,1.469
										c0.203,0.203,0.469,0.304,0.735,0.304c0.266,0,0.531-0.101,0.735-0.304L10,11.469l7.08,7.081c0.203,0.203,0.469,0.304,0.735,0.304
										c0.267,0,0.532-0.101,0.735-0.304c0.406-0.406,0.406-1.064,0-1.469L11.469,10z"></path>
									</svg></button>';
								echo '</form>';

					    	echo '</div>';

					        //getting post
					        echo '<div class="main-post">';
					        echo $row["note_txt"];
					        echo '</div>';
					       
					       
					        echo '</div>';

					    }
					} else {
					    echo '<div class="zero-result">There are no notes</div>';
					}

					mysqli_close($conn);

				?>

	</div>

</body>
</html>