<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Settings</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/settings.css">
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>

<?php include 'includes/header.php'; ?>

<div id="main_container">
  
  <?php include 'includes/sidenav.php' ?>

	<div class="settings-container">
	<form action="" method="POST">
  	<table border="0">
  	  <tr>
  	  	<td class="label">
  	  	  <label>Name</label>
  	  	</td>
  	  	<td>
  	  	  <input type="text" name="fname" class="fname" value="Akshay" autocomplete="off">
          <input type="text" name="lname" class="lname" value="Pithadiya" autocomplete="off">

  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>About you</label>
  	  	</td>
  	  	<td>
  	  	  <textarea name="bio" class="about"></textarea>
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>Current city</label>
  	  	</td>
  	  	<td>
  	  	  <input type="text" name="city" class="city" value="Mumbai" autocomplete="off">
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>Email address</label>
  	  	</td>
  	  	<td>
  	  	  <input type="text" name="email" class="email" value="akshay.pithadiya@gmail.com" autocomplete="off">
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td colspan="2" class="label">
  	  	  <input type="submit" class="save-btn" value="Save changes">
  	  	</td>
  	  </tr>
      <tr>
        <td class="delete-label">
          <label>Delete account</label>
        </td>
        <td class="delete-btn-td">
          <input type="submit" class="delete-btn" value="Delete">
        </td>
      </tr>
  	</table>
  </form>
  
	</div>

</div>

</body>
</html>