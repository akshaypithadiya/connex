<?php include 'includes/login.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="header"></div>

<div id="container">
  
    <div class="container-header">
      Login
    </div>
    <div class="container-body">
      <div class="error"><?php echo $error; ?></div>
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="username" placeholder="Username" value="<?php echo @$_POST['username']; ?>" maxlength="25" autocomplete="off">
        <input type="password" name="password" placeholder="Password" maxlength="25" autocomplete="off">
        <input type="submit" name="submit" value="Log in" class="button">
      </form>
      <a href="signup.php">
        <input type="submit" value="Sign up" class="button_sup">
      </a>
    </div>
    
</div>

</body>
</html>