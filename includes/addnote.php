<?php include 'includes/userinfo.php'; ?>

<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";
$tbname = "notes";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

$note_txt = $error = ""; // variables to store error message

if (isset($_POST["add_note"])) {
  $note_txt = rtrim($_POST["note_txt"]);
  if (empty($note_txt)) {
    $error = '<div class="error">Please write a note</div>';
  } else {
    // define $username and $password
    $note_txt = $_POST["note_txt"];
    
    // to protect with MySQL injection
    $note_txt = stripslashes($note_txt);

    $note_txt = mysqli_real_escape_string($conn, $note_txt);




    date_default_timezone_set('Asia/Kolkata');
    $date = date('d F Y', time())." at ";
    $time = date('h:i a', time());
    echo $date_time = $date.''.$time;




    // SQL query to fetch information of users and finds the user match
    $query = "INSERT INTO notes (note_id, user_name, note_txt, note_date_time) VALUES(NULL, '$user_name', '$note_txt', '$date_time')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("location: notes.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection


   
  }
}

?>
