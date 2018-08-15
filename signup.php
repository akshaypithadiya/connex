<?php include 'includes/signupac.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="header"></div>

<div id="container">
    <div class="container-header">
      Signup for postear
    </div> 
    <div class="container-body">
      <div class="error"><?php echo $error; ?></div>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="fname" placeholder="First name" value="<?php echo @$_POST['fname']; ?>" maxlength="25" autocomplete="off">
        <input type="text" name="lname" placeholder="Last name" value="<?php echo @$_POST['lname']; ?>" maxlength="25" autocomplete="off">
        <input type="text" name="email" placeholder="Email address" value="<?php echo @$_POST['email']; ?>" maxlength="25" autocomplete="off">
        <input type="text" name="username" placeholder="Username" value="<?php echo @$_POST['username']; ?>" maxlength="25" autocomplete="off">
        <input type="password" name="password" placeholder="Password" maxlength="25">
        <input type="submit" name="submit" value="Sign up" class="button_sup">
      </form>
      <a href="index.php">
        <input type="submit" value="Log in" class="button">
      </a>
    </div>
  </div>

</body>
</html>