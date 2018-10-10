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
  $the_pstid = $_POST["pstid"];

    // SQL query to fetch information of users and finds the user match
    $query = "DELETE FROM posts WHERE post_id='$the_pstid'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("location: profile.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection

}
   

?>