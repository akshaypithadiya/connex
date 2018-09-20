<?php include 'includes/connection.php' ; ?>
<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>Members</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/members.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="main_container">
		
		<?php include 'includes/sidenav.php' ?>
				
				<?php

					$members_names = "SELECT fname, lname, username, email, about, city, propic FROM users";
					$result = mysqli_query($conn, $members_names);


					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {

					    	echo '<div class="members-container">';

					    	echo '<div class="members-container-header">';

					    		//getting fullname
						    	echo '<a href="images/'.$row["propic"].'"target="_blank">';
								echo '<img src="images/'.$row["propic"].'"id="pro-pic">';
								echo '</a>';

						    	echo '<div class="full-name">';
						        echo $row["fname"]." ".$row["lname"];
						        echo '</div>';
						        echo '<br>';
						        echo '<div class="user-name">';
						        echo $row["username"];
						        echo '</div>';

					    	echo '</div>';

					    	echo '<div class="members-container-body">';

						    	echo '<div class="about" style="margin-bottom: 6px;">';
						    		echo '<span class="v">About<span>&nbsp;&nbsp;-&nbsp;&nbsp;'.'<span class="d">'.$row["about"].'</span>';
						    	echo '</div>';

						    	echo '<div class="cur-city">';
						    		echo '<span class="v">Location<span>&nbsp;&nbsp;-&nbsp;&nbsp;'.'<span class="d">'.$row["city"].'</span>';
						    	echo '</div>';

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