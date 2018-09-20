<?php

include 'connection.php';

$username = $password = $error = ""; // variables to store error message

if (isset($_POST["submit"])) {

  $fname = rtrim($_POST["fname"]);
  $lname = rtrim($_POST["lname"]);
  $email = rtrim($_POST["email"]);
  $username = rtrim($_POST["username"]);
  $password = rtrim($_POST["password"]);

  if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password)) {
    $error = '<div class="error">Enter all the required details</div>';
  } else {
    // define $username and $password
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // to protect with MySQL injection
    $fname = stripslashes($fname);
    $lname = stripslashes($lname);
    $email = stripslashes($email);
    $username = stripslashes($username);
    $password = stripslashes($password);

    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = mysqli_real_escape_string($conn, $lname);
    $email = mysqli_real_escape_string($conn, $email);
    $username = strtolower(mysqli_real_escape_string($conn, $username));
    $password = mysqli_real_escape_string($conn, $password);


    // checking if username already exist
    $name = "SELECT username from users WHERE username='$username'";
    $name_result = mysqli_query($conn, $name);
    $count = mysqli_num_rows($name_result);
    
    if ($count != 0) {
      $error = '<div class="error">The username is already taken</div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = '<div class="error">Invalid email address</div>';
    } else {
      // SQL query to fetch information of users and finds the user match
      $query = "INSERT INTO users (id, fname, lname, email, username, password, propic) VALUES(NULL, '$fname', '$lname', '$email', '$username', '$password','default.png')";
      $result = mysqli_query($conn, $query);

      if ($result) {
        header("location: index.php"); //redirecting to other page
      } else {
        echo "something went wrong";
      }

      mysqli_close($conn); // closing connection
    }

   
  }
}

?>
