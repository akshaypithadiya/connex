<?php

include ('connection.php');

session_start();

$username = $password = $error = ""; // variables to store error message

if (isset($_POST["submit"])) {
  if (empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["username"]) || empty($_POST["password"])) {
    $error = "Enter all the required details";
  } else {

    // define $username and $password
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // to protect with MySQL injection
    $fname = stripslashes($fname);
    $lname = stripslashes($lname);
    $username = stripslashes($username);
    $password = stripslashes($password);

    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // SQL query to fetch information of users and finds the user match
    $sql = "INSERT INTO users (fname, lname, username, password) VALUES($fname, $lname, $username, $password)";
    $result = mysqli_query($conn, $sql);

    // counting mysql_num_rows and storing it in $count
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      header("location: index.php"); // redirecting to other page
    } else {
      $error = "Invalid operation";
    }
    mysqli_close($conn); // closing connection
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up | postear</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style/style.css">
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
        <input type="text" name="fname" placeholder="First name">
        <input type="text" name="lname" placeholder="Last name">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="submit" value="Sign up" class="button_sup">
      </form>
      <a href="index.php">
        <input type="submit" value="Log in" class="button">
      </a>
    </div>
  </div>

</body>
</html>