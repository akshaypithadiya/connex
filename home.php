<?php include ('includes/session.php'); ?>




<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<style type="text/css">

	body{
		font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
		margin: 0px auto;
		background: #edeef0;
	}

	#header{
		background: #4a76a8;
		height: 45px;
		width: 100%;
		margin: 0px auto;
		top: 0px;
		position: fixed;
	}

	#main_container{

		//border: 1px solid black;

		max-width: 815px;
		margin: 0px auto;
		margin-top: 60px;
		padding: 10px;
		overflow: auto;
	}

	.posts{
		width: 500px;
		height: 200px;
		border: 1px solid #d7d8db;
		border-radius: 5px;
		margin: 0px auto;
		background: white;
		margin-bottom: 12px;
	}

	.sidenav {
    	width: 140px;
    	position: fixed; /* Fixed Sidebar (stay in place on scroll) */
    	//z-index: -1; /* Stay on top */

    	//background-color: #ffffff; /* Black */
    	//border: 1px solid #d7d8db;

    	border-radius: 5px;
    	//overflow-x: hidden; /* Disable horizontal scroll */
    	//padding-top: 70px;
    	float: left;
    }

	.sidenav a {
	    padding: 6px 8px 6px 16px;
	    text-decoration: none;
	    font-size: 12.5px;
	    color: #285473;
	    display: block;
	    margin-bottom: 4px;
	}
	.sidenav a:hover {
	    background: #e1e5eb;
	    border-radius: 3px;
	}

	#right-nav{
		border: 1px solid #d7d8db;
		background: #ffffff;
		width: 135px;
		border-radius: 4px;
		height: 250px;
		float: right;
		margin-top: 0px;
	}

	.user-ol{
		max-width: 150px;
		height: 100%;
		float: right;
		margin-right: 10%;
		cursor: pointer;
	}

	.user-ol:hover{
		background: #3d6898;
	}

	.user-ol-txt{
		color: #ffffff;
		padding: 0px 10px 0px 10px;
		font-size: 12.5px;
		margin-top: 15px;
	}

	.fa-home,
	.fa-user,
	.fa-user-friends,
	.fa-clipboard,
	.fa-sticky-note,
	.fa-cog,
	.fa-sign-out-alt{
		font-size: 15.5px;
		margin-right: 8px;
		color: #99b0c6;
	}

	</style>
</head>
<body>
	<div id="header">
	<div class="user-ol">
		<div class="user-ol-txt">
			<?php echo $usersession; ?>	
		</div>
	</div>
</div>

<div id="main_container">
	<div class="sidenav">
		<a href="#"><i class="fas fa-home"></i>&nbsp;Home</a>
		<a href="#"><i class="fas fa-user"></i>&nbsp;&nbsp;Profile</a>
	  	<a href="#"><i class="fas fa-user-friends"></i>Members</a>
	    <a href="#"><i class="fas fa-clipboard"></i>&nbsp;&nbsp;&nbsp;Posts</a>
	    <a href="#"><i class="fas fa-sticky-note"></i>&nbsp;&nbsp;Notes</a>
	    <a href="#"><i class="fas fa-cog"></i>&nbsp;Settings</a>
		<a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
	</div>

	<div id="right-nav">
		
	</div>

	<div class="posts"></div>
	<div class="posts"></div>
	<div class="posts"></div>
	<div class="posts"></div>

</div>

</body>
</html>
