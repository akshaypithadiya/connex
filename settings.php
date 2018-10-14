<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>
<?php include 'includes/settingsupdate.php'; ?>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";
$tbname = "images";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

  $img_up_error = ""; // declare error variable

  // if upload button is clicked
  if (isset($_POST['upload'])) {
    // get image name
    $image = $_FILES['image']['name'];
    // image file directory
    $target = "images/".basename($image);

    $sql = "UPDATE users SET propic='$image' WHERE username='$user_name'";
    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header("location: profile.php");
    }else{
      echo $img_up_error = "Failed to upload image";
    }
  }

?>


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

  <div class="upload-photo-container">
    <div class="upload-label">Upload picture</div>
    <div class="frm-container">



      <form action="" method="POST" enctype="multipart/form-data">
        <label class="file-label">Choose file<input type="file" name="image" size="60"></label>
        <input type="submit" name="upload" value="Upload" class="upload-btn">
      </form>



    </div>
  </div>

	<form action="" method="POST">
  	<table border="0">
  	  <tr>
  	  	<td class="label">
  	  	  <label>Name</label>
  	  	</td>
  	  	<td>
  	  	  <span class="full-name"><?php echo $full_name; ?></span>
  	  	</td>
  	  </tr>
      <tr>
        <td class="label">
          <label>Username</label>
        </td>
        <td>
          <span class="full-name"><?php echo $user_name; ?></span>
        </td>
      </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>About you</label>
  	  	</td>
  	  	<td>
  	  	  <textarea name="bio" class="about"><?php echo $about_you; ?></textarea>
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>Current city</label>
  	  	</td>
  	  	<td>
  	  	  <input type="text" name="city" class="city" value="<?php echo $current_city; ?>" autocomplete="off">
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td class="label">
  	  	  <label>Email address</label>
  	  	</td>
  	  	<td>
  	  	  <input type="text" name="email" class="email" value="<?php echo $email_address; ?>" autocomplete="off">
  	  	</td>
  	  </tr>
  	  <tr>
  	  	<td colspan="2" class="label">
  	  	  <input type="submit" class="save-btn" name="save" value="Save changes">
  	  	</td>
  	  </tr>
      <tr>
        <td class="delete-label">
          <label>Delete account</label>
        </td>
        <td class="delete-btn-td">
          <a href="delete.php" class="delete-btn">Delete</a>
        </td>
      </tr>
  	</table>
  </form>
  
	</div>

</div>

</body>
</html>