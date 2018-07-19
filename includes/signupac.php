<?php

include ('connection.php');

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
    $username = strtolower(mysqli_real_escape_string($conn, $username));
    $password = mysqli_real_escape_string($conn, $password);


    // checking if username already exist
    $name = "SELECT username from users WHERE username='$username'";
    $name_result = mysqli_query($conn, $name);
    $count = mysqli_num_rows($name_result);
    
    if ($count != 0) {
      $error = "The username is already taken";
    } else {
      // SQL query to fetch information of users and finds the user match
      $query = "INSERT INTO users (id, fname, lname, username, password) VALUES(NULL, '$fname', '$lname', '$username', '$password')";
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
