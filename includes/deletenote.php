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
  $the_note_id = $_POST["noteid"];

    // SQL query to fetch information of users and finds the user match
    $query = "DELETE FROM notes WHERE note_id='$the_note_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("location: notes.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection

}
   

?>