<?php include 'includes/userinfo.php'; ?>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";
$tbname = "posts";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

$note_txt = $error = ""; // variables to store error message

if (isset($_POST["add_post"])) {
  if (empty($_POST["post_txt"])) {
    $error = '<div class="error">Please write a post</div>';
  } else {
    // define $username and $password
    $post_txt = $_POST["post_txt"];
    
    // to protect with MySQL injection
    $post_txt = stripslashes($post_txt);

    $post_txt = mysqli_real_escape_string($conn, $post_txt);



    date_default_timezone_set('Asia/Kolkata');
    $date = date('d F Y', time())." at ";
    $time = date('h:i a', time());
    echo $post_date_time = $date.''.$time;



    // SQL query to fetch information of users and finds the user match
    $query = "INSERT INTO posts (post_id, full_name, user_name, post_txt, post_date_time) VALUES(NULL, '$full_name', '$user_name', '$post_txt', '$post_date_time')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("location: home.php"); //redirecting to other page
    } else {
      echo "something went wrong";
    }

    mysqli_close($conn); // closing connection


   
  }
}

?>
