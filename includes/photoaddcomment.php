<?php include 'includes/userinfo.php'; ?>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

$cmnt_txt = ""; // variables to store error message

if (isset($_POST["add_cmnt"])) {
  $cmnt_txt = rtrim($_POST["cmnt_txt"]);
  $the_photo_id = $_POST["the_photo_id"];
  if (empty($cmnt_txt)) {
    //$error = '<div class="cmnt_error">Please write a comment</div>';
  } else {
    // define $username and $password
    $cmnt_txt = $_POST["cmnt_txt"];
    
    // to protect with MySQL injection
    $cmnt_txt = stripslashes($cmnt_txt);

    $cmnt_txt = mysqli_real_escape_string($conn, $cmnt_txt);

    // SQL query to fetch information of users and finds the user match
    $query = "INSERT INTO photocmnts(photo_id, full_name, cmnt_txt) VALUES('$the_photo_id', '$full_name', '$cmnt_txt')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("location: photos.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection


   
  }
}

?>
