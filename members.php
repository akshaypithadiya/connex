<?php include ('includes/session.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home-style.css">
	<link rel="stylesheet" type="text/css" href="css/mem-con.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
	<div id="header">
	<div class="user-user">
		<div class="user-user-txt">
			<?php echo $usersession; ?>	
		</div>
	</div>
</div>

<div id="main_container">
	<div class="sidenav">
		<a href="home.php"><i class="fas fa-home"></i>&nbsp;Home</a>
		<a href="#"><i class="fas fa-user"></i>&nbsp;&nbsp;Profile</a>
	  	<a href="#"><i class="fas fa-user-friends"></i>Members</a>
	    <!-- <a href="#"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Posts</a> -->
	    <a href="#"><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Notes</a>
	    <a href="#"><i class="fas fa-cog"></i>&nbsp;Settings</a>
		<a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
	</div>

	<div class="members-container">
		<div class="full-name">Akshay Pithadiya</div>
	</div>


</div>

</body>
</html>