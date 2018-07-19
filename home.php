<?php include ('includes/session.php'); ?>

<html>
<head>
	<title>Home</title>
</head>
<body>
	<div id="header">Hello!</div>
	<p>
		Welcome, <?php echo $usersession; ?> <a href="logout.php">Log out</a>
	<p>
</body>
</html>