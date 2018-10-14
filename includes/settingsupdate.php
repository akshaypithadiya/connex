<?php include 'includes/connection.php'; ?>
<?php include 'includes/userinfo.php'; ?>

<?php

if (isset($_POST["save"])) {

	$bio = $_POST["bio"];
    $city = $_POST["city"];
    $email = $_POST["email"];

    $bio = rtrim($bio);
    $city = rtrim($city);
    $email = rtrim($email);

    $bio = stripslashes($bio);
    $city = stripslashes($city);
    $email = stripslashes($email);

    $bio = mysqli_real_escape_string($conn, $bio);
    $city = mysqli_real_escape_string($conn, $city);
    $email = mysqli_real_escape_string($conn, $email);

    $query = "UPDATE users SET about='$bio', city='$city', email='$email' WHERE username='$user_name'";
    $result = mysqli_query($conn, $query);

    if ($result) {
    	header("location: profile.php");
    }
      mysqli_close($conn);
    }

   
?>