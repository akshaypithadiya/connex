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
	<style type="text/css">
		table{
			width: 100%;
			font-size: 13.5px;
		}

		.td-title{
			color: #9e9e9e;
			text-align: left;
		}

		.td-data{
			color: #424242;
		}
	</style>
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

					    		
						    	echo '<a href="images/'.$row["propic"].'"target="_blank">';
								echo '<img src="images/'.$row["propic"].'"id="pro-pic">';
								echo '</a>';

								//getting fullname
						    	echo '<div class="full-name">';
						        echo $row["fname"]." ".$row["lname"];
						        echo '</div>';
						        echo '<br>';
						        //getting fullname
						        echo '<div class="user-name">';
						        echo $row["username"];
						        echo '</div>';


					    	echo '</div>';


					    	echo '<div class="members-container-body">';

						    echo'<table border="0">';
						    echo'      <tr>';
							echo'        <td class="label">';
							echo'          <label>Email</label>';
							echo'        </td>';
							echo'        <td>';
							echo'          <span class="usr-inf">'.$row["email"].'</span>'; //########
							echo'        </td>';
							echo'      </tr>';
							echo'  	  <tr>';
							echo'  	  	<td class="label">';
							echo'  	  	  <label>About</label>';
							echo'  	  	</td>';
							echo'  	  	<td>';
							echo'  	  	  <span class="usr-inf">'.$row["about"].'</span>'; //########
							echo'  	  	</td>';
							echo'  	  </tr>';
							echo'      <tr>';
							echo'        <td class="label">';
							echo'          <label>City</label>';
							echo'        </td>';
							echo'        <td>';
							echo'          <span class="usr-inf">'.$row["city"].'</span>'; //########
							echo'        </td>';
							echo'      </tr>';
							echo'  	</table>';

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