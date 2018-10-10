<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>
<?php include 'includes/deletepst.php'; ?>

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
	//getting profile picture
	$pro_pic = mysqli_query($conn, "SELECT propic FROM users WHERE username='$user_name'");
	$row = mysqli_fetch_assoc($pro_pic);
	$display_pic = @$row['propic'];
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
		margin-right: -1px;
	}

	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div class="pro-container">
			
			<?php echo '<a href="images/'.$display_pic.'"target="_blank">' ?>
				<?php echo '<img src="images/'.$display_pic.'"id="pro-pic">'; ?>
			</a>
			
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
			    	$pstid = $row["post_id"];
			    	echo '<div id="post-container-pro">';
			    	echo '<div class="post-container-pro-header">';

	

			    	echo '<form action="" method="POST">';
			    	echo '<input type="hidden" name="pstid" value="'.$pstid.'">';
					echo '<button type="submit" name="del" class="del-btn"><svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M11.469,10l7.08-7.08c0.406-0.406,0.406-1.064,0-1.469c-0.406-0.406-1.063-0.406-1.469,0L10,8.53l-7.081-7.08
							c-0.406-0.406-1.064-0.406-1.469,0c-0.406,0.406-0.406,1.063,0,1.469L8.531,10L1.45,17.081c-0.406,0.406-0.406,1.064,0,1.469
							c0.203,0.203,0.469,0.304,0.735,0.304c0.266,0,0.531-0.101,0.735-0.304L10,11.469l7.08,7.081c0.203,0.203,0.469,0.304,0.735,0.304
							c0.267,0,0.532-0.101,0.735-0.304c0.406-0.406,0.406-1.064,0-1.469L11.469,10z"></path>
						</svg></button>';
					echo '</form>';



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
			    echo '<div class="zero-result">There are no posts</div>';
			}
			mysqli_close($conn);
		?>


	</div>


</body>
</html>
