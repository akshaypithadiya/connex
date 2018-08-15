<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>

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
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="main_container">

		<?php include 'includes/sidenav.php'; ?>

		<div class="pro-container">

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
				</table>
				<div class="edit-info">
					<button type="submit" class="edit-info-btn" onclick="location.href='settings.php'">Edit information</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>