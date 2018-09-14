<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>

<?php

if(isset($_POST["upload"])){
  @$target = "images/".basename($_FILE['image']['name']);

  $db = mysqli_connect("localhost","root","","test");
  @$image = $_FILE['image']['name'];

  $sql = "UPDATE users SET propic='$image' WHERE username='$user_name'";
  mysqli_query($db, $sql) or die("some error bitch");

  if(move_uploaded_file(@$_FILE['image']['tmp_name'], $target)){
    echo $msg = "image uploaded success";
  } else {
    echo $msg = "some error occured whgile uploaidng";
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
  	  	  <input type="text" name="fname" class="fname" value="<?php echo $f_name; ?>" autocomplete="off">
          <input type="text" name="lname" class="lname" value="<?php echo $l_name; ?>" autocomplete="off">
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
  	  	  <input type="submit" class="save-btn" value="Save changes">
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