<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>
<?php include 'includes/deleteac.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/delete.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="delete_container">
		<div class="delete_header">
			<div class="delete_header_title">Delete account</div>
			Are you sure you want to delete your account?
			<br>
			<div class="delete_header_note">  </div>

		</div>
		<div class="delete_main">
			<div class="error"><?php echo $error; ?></div>
			<form action="" method="POST">
				<input type="password" name="password" class="del_pass" placeholder="Enter password"><br>
				<input type="submit" name="submit" class="yes-btn" value="Yes, delete">
				<a href="settings.php" class="no-btn">No</a>
			</form>
		</div>
	</div>

</body>
</html>