<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/photos.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="main_container">
		
		<?php include 'includes/sidenav.php' ?>

		<?php

			$get_photos = "SELECT name,username, image FROM photos";
			$result = mysqli_query($conn, $get_photos);


			if (mysqli_num_rows($result) > 0) {

			    while($row = mysqli_fetch_assoc($result)) {

			    	echo '<div class="photos-container">';

			    	echo '<div class="photos-container-header">';
			    		echo '<div class="name">';
				        echo $row["name"];
				        echo '</div>';
			    		echo '<div class="user-name">';
				        echo $row["username"];
				        echo '</div>';
			    	echo '</div>';

			    	echo '<div class="photos-container-body">';
				    	echo '<a href="images/'.$row["image"].'"target="_blank">';
							echo '<img src="images/'.$row["image"].'"id="img-pic">';
						echo '</a>';
					echo '</div>';



			        echo '</div>';

			    }
			} else {
			    echo "0 results";
			}

			mysqli_close($conn);

		?>


	</div>