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

if (isset($_POST["del"])) {
  $the_photoid = $_POST["photoid"];

    // SQL query to fetch information of users and finds the user match
    $query = "DELETE FROM photos WHERE photo_id='$the_photoid'";
    $result = mysqli_query($conn, $query);

    $cmnt_del_query = "DELETE FROM photocmnts WHERE photo_id='$the_photoid'";
    $result = mysqli_query($conn, $cmnt_del_query);

    if ($result) {
      header("location: photos.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection

}
   

?>