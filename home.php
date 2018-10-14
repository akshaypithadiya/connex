<?php include 'includes/session.php'; ?>
<?php include 'includes/addpost.php'; ?>
<?php include 'includes/addcomment.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
		.cmntr-name{
			font-size: 12px;
			color: #285473;
		}
		.cmntr-msg{
			font-size: 12px;
			color: #616161;
		}
	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>
	
	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div id="add-post-container">
			<form action="" method="POST">
				<textarea name="post_txt" class="add-post-tarea" maxlength="200" placeholder="Write a post"></textarea><br>
				<input type="submit" name="add_post" class="add-post-btn" value="Post"><?php echo @$error; ?>
			</form>
		</div>


		<?php


			$fetch_posts = "SELECT full_name, post_id, post_txt, post_date_time FROM posts ORDER BY post_id DESC";
			$result = mysqli_query($conn, $fetch_posts);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {

			    	echo '<div id="post-container">'; // main post container start

			    	echo '<div class="post-container-header">'; // header start


				    	//getting full-name
				    	echo '<div class="full-name-con">';
				        echo $row["full_name"];
				        echo '</div>';

				    	//getting date-time
				    	echo '<div class="date-time-con">';
				        echo $row["post_date_time"];
				        echo '</div>';

			    	echo '</div>'; // container header close

			    	//getting post
			        echo '<div class="post-txt-con">';
			        	echo $row["post_txt"];
			        echo '</div>';

			       	$get_the_post_id = $row["post_id"];

			        echo '<div class="comment-section">';

			        $fetch_cmnts = "SELECT full_name, cmnt_txt FROM comments WHERE post_id='$get_the_post_id'";
					$cmnt_result = mysqli_query($conn, $fetch_cmnts);

					while($row = mysqli_fetch_assoc($cmnt_result)) {


							echo '<div class="all-comments">';
								echo '<span class="cmntr-name">'.$row["full_name"];'</span>';
								echo '&nbsp;&nbsp;';
								echo '<span class="cmntr-msg">'.$row["cmnt_txt"];'</span>';
							echo '</div>';

			    	}




			        echo '</div>';

			        echo '<div class="add-comment-field">';
			        echo '
			        	  <form action="" method="POST">
			        	     <input type="hidden" name="the_post_id" value="'.$get_the_post_id.'">
						     <input type="text" name="cmnt_txt" autocomplete="off" maxlength="40" class="add-cmnt-inp" placeholder="Write a comment">
				             <input type="submit" name="add_cmnt" class="add-cmnt-btn" value="Post">
		 	              </form>';
			        echo '</div>';


			    	echo '</div>'; //main post container close

			    }
			} else {
			    echo '<div class="zero-result">There are no posts</div>';
			}

			mysqli_close($conn);

		?>


	</div>

</body>
</html>
