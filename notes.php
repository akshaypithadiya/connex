<?php include 'includes/session.php'; ?>

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
			<textarea name="notedata" class="add-note-tarea" placeholder="Write a note"></textarea><br>
			<input type="submit" class="save-note-btn" value="Add note">
		</div>

		<div id="notes-container">
			<div class="date-time">
				<?php
					date_default_timezone_set('Asia/Kolkata');
					$date = date('d F Y', time())." at ";
					$time = date('h:i a', time());
					echo $date_time = $date.''.$time;
				?>
			</div>
			<div class="main-post">this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro. this is my first note bro.</div>

			
		<!--	
			<div class="delete-btn-container">
				<input type="submit" class="delete-btn" value="Delete note">
			</div>
		-->
		</div>
		<div id="dta" style="border: 1px solid black;"></div>


	</div>
		
	<script>

	$(document).ready(function() {
		$('.save-note-btn').click(function() {
			if (!$('.add-note-tarea').val() == '') {
				var note = $('.add-note-tarea').val();
				var datetime = '<?php echo $date_time ?>';
				$.ajax({
		            type: 'POST',
		            url: 'ak.php',
		            data: {note_key:note, datetime_key:datetime},
		            success: function(data, status) {
		                $('.add-note-tarea').val('');
		            }
	        	});
			} else {
				alert("Please enter name");
			}	
	    });
	});

	</script>

</body>
</html>