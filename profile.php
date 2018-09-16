<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>

<?php


	//getting total posts
	$post_count_query = "SELECT COUNT(*) as total_posts FROM posts WHERE user_name='$user_name'";
	$result = mysqli_query($conn, $post_count_query);
	$row = mysqli_fetch_assoc($result);
	$total_posts = @$row['total_posts'];


	//getting total notes
	$note_count_query = "SELECT COUNT(*) as total_notes FROM notes WHERE user_name='$user_name'";
	$result = mysqli_query($conn, $note_count_query);
	$row = mysqli_fetch_assoc($result);
	$total_notes = @$row['total_notes'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/profile.css">
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

		<div class="pro-container">
			<!--
			<a href="images/default.png" target="_blank">
				<img src="images/default.png" id="pro-pic">
			</a>
			-->
			<div class="user-info">
				<table cellpadding="5" border="0">
					<col width="100">
					<tr>
						<td class="td-title">Name</td>
						<td class="td-data"><?php echo $full_name; ?></td>
					</tr>
					<tr>
						<td class="td-title">Username</td>
						<td class="td-data"><?php echo $user_name; ?></td>
					</tr>
					<tr>
						<td class="td-title">Email address</td>
						<td class="td-data"><?php echo $email_address; ?></td>
					</tr>
					<tr>
						<td class="td-title">About you</td>
						<td class="td-data"><?php echo $about_you; ?></td>
					</tr>
					<tr>
						<td class="td-title">Current city</td>
						<td class="td-data"><?php echo $current_city; ?></td>
					</tr>
					<tr>
						<td class="td-title">Posts</td>
						<td class="td-data"><?php echo $total_posts; ?></td>
					</tr>
					<tr>
						<td class="td-title">Notes</td>
						<td class="td-data"><?php echo $total_notes; ?></td>
					</tr>
				</table>

				<div class="edit-info">
					<button type="submit" class="edit-info-btn" onclick="location.href='settings.php'">Edit profile</button>
				</div>

			</div>
		</div>


		<?php


			$fetch_posts = "SELECT full_name, post_id, post_txt, post_date_time FROM posts WHERE user_name='$user_name' ORDER BY post_id DESC";
			$result = mysqli_query($conn, $fetch_posts);


			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {

			    	echo '<div id="post-container-pro">';


			    	echo '<div class="post-container-pro-header">';

			    		//echo '<i class="fas fa-angle-down"></i>';

			    	echo'<svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
						</svg>';

				    	//getting date-time
				    	echo '<div class="full-name">';
				        echo $row["full_name"];
				        echo '</div>';

				    	//getting date-time
				    	echo '<div class="date-time">';
				        echo $row["post_date_time"];
				        echo '</div>';
			    	echo '</div>';


			    	//getting post
			        echo '<div class="main-post">';
			        echo $row["post_txt"];
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