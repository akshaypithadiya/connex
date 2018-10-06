<?php include 'includes/session.php'; ?>
<?php include 'includes/addpost.php'; ?>

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
	.fa-heart{
		font-size: 16px;
		color: #757575;
		cursor: pointer;
	}

	.fa-heart:hover, .fa-heart.green { color: #f03048; }

	.footer{
		border-top: 1px solid #d7d8db;
		padding: 10px 15px 10px 15px; 
	}
	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>
	
	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div id="right-nav"></div>
		
		<div id="add-post-container">
			<form action="" method="POST">
				<textarea name="post_txt" class="add-post-tarea" placeholder="Write a post"></textarea><br>
				<input type="submit" name="add_post" class="add-post-btn" value="Post"><?php echo @$error; ?>
			</form>
		</div>

		<?php


			$fetch_posts = "SELECT full_name, post_id, propic, post_txt, post_date_time FROM posts ORDER BY post_id DESC";
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


			        //echo '<div class="footer">';
			        //echo '<i class="fas fa-heart"></i>';
			        //echo '</div>';			        
			       

			    	echo '</div>'; //main post container close

			    }
			} else {
			    echo "0 results";
			}

			mysqli_close($conn);

		?>


	</div>

<script type="text/javascript">
	$(".fa-heart").click(function () {
   $(this).toggleClass("green");
});
</script>
</body>
</html>
