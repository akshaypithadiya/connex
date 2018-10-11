<?php include 'includes/session.php'; ?>
<?php include 'includes/userinfo.php'; ?>
<?php include 'includes/deletephoto.php'; ?>
<?php include 'includes/photoaddcomment.php'; ?>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "test";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

  $img_up_error = ""; // declare error variable

  // if upload button is clicked
  if (isset($_POST['upload'])) {
    // get image name
    $image = $_FILES['image']['name'];
    // image file directory
    $target = "photos/".basename($image);

    date_default_timezone_set('Asia/Kolkata');
    $date = date('d F Y', time())." at ";
    $time = date('h:i a', time());
    echo $photo_date_time = $date.''.$time;

    // SQL query to fetch information of users and finds the user match
    $query = "INSERT INTO photos(photo_id, username, full_name, photo, photo_date_time) VALUES (NULL, '$user_name', '$full_name','$image', '$photo_date_time')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      echo "something went wrong";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header("location: photos.php");
    }else{
      echo $img_up_error = "Failed to upload image";
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Members</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/photos.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/sidenav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
	<style>
	.upload-photo-container{
        width: 470px;
	    padding: 15px;
	    border: 1px solid #d7d8db;
	    border-radius: 5px;
	    margin: 0px auto;
	    background: white;
	    margin-bottom: 12px;

	}
	.upload-btn{
	    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	    background-color: #5fb053;
	    color: #FFFFFF;
	    border: 1px solid #5fb053;
	    border-radius: 4px;
	    padding: 9px 15px;
	    font-size: 12.5px;
	    outline: none;
	    cursor: pointer;
	    margin-top: 5px;
	}

	.file-label{
	    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	    background-color: #5181b8;
	    color: #FFFFFF;
	    border: 1px solid #5181b8;
	    margin-right: 10px;
	    margin-left: 15px;
	    border-radius: 4px;
	    padding: 9px 15px;
	    font-size: 12.5px;
	    outline: none;
	    cursor: pointer;
	}

	input[type=file] {
	    color: #9e9e9e;
	    font-size: 13px;
	    display: none;
	}
	.up-lbl{
		font-size: 13px;
		color: #424242;
	}



	.svg-icon {
	  width: 12px;
	  height: 12px;
	}

	.svg-icon path,
	.svg-icon polygon,
	.svg-icon rect {
	  fill: #757575;
	}

	.svg-icon circle {
	  stroke: #4691f6;
	  stroke-width: 1;
	}

	.del-btn{
		float: right;
		padding: 0px;
		cursor: pointer;
		outline: none;
		background: transparent;
		border: 0px;
		margin-right: -6px;
	}
	.zero-result{
	    font-size: 13px;
	    text-align: center;
	    border: 1px solid #d7d8db;
	    max-width: 470px;
	    margin: 0px auto;
	    padding: 15px;
	    border-radius: 5px;
	    background: #ffffff;
	    color: #424242;
	}

	.comment-section{
    	border-top: 1px solid #d7d8db;
    	padding: 5px 15px 10px 15px; 
	}

	.cmntr-name{
		font-size: 12px;
		color: #285473;
	}
	
	.cmntr-msg{
		font-size: 12px;
		color: #616161;
	}

	.add-comment-field{
    border-top: 1px solid #d7d8db;
    padding: 10px 15px 5px 15px;   
}



.add-cmnt-inp{
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    width: 403px;
    padding: 10px 8px;
    font-size: 13px;
    color: #424242;
    border: 1px solid #E0E0E0;
    border-radius: 4px;
    outline: none;
    box-sizing: border-box;
    margin-bottom: 7px;
    margin-right: 5px;
}

.add-cmnt-inp:focus{
     border: 1px solid #5181b8;
}   

.add-cmnt-btn{
    font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
    background-color: #5181b8;
    color: #FFFFFF;
    border: 1px solid #5181b8;
    border-radius: 4px;
    padding: 9px 15px;
    font-size: 12.5px;
    outline: none;
    cursor: pointer;
}

	</style>
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div id="main_container">
		
	<?php include 'includes/sidenav.php' ?>

	  <div class="upload-photo-container">
	    <div class="frm-container">

	      <form action="" method="POST" enctype="multipart/form-data">
	       	<span class="up-lbl">Upload photo</span>
	       	<label class="file-label">Choose file<input type="file" name="image" size="60"></label>
	        <input type="submit" name="upload" value="Upload" class="upload-btn">
	      </form>

	    </div>
	  </div>

		<?php

			$get_photos = "SELECT * FROM photos ORDER BY photo_id DESC";
			$result = mysqli_query($conn, $get_photos);


			if (mysqli_num_rows($result) > 0) {

			    while($row = mysqli_fetch_assoc($result)) {
			    	$photoid = $row["photo_id"];
			    	echo '<div class="photos-container">';

			    	echo '<div class="photos-container-header">';

				    	echo '<form action="" method="POST">';
				    	echo '<input type="hidden" name="photoid" value="'.$photoid.'">';
						echo '<button type="submit" name="del" class="del-btn"><svg class="svg-icon" viewBox="0 0 20 20">
								<path fill="none" d="M11.469,10l7.08-7.08c0.406-0.406,0.406-1.064,0-1.469c-0.406-0.406-1.063-0.406-1.469,0L10,8.53l-7.081-7.08
								c-0.406-0.406-1.064-0.406-1.469,0c-0.406,0.406-0.406,1.063,0,1.469L8.531,10L1.45,17.081c-0.406,0.406-0.406,1.064,0,1.469
								c0.203,0.203,0.469,0.304,0.735,0.304c0.266,0,0.531-0.101,0.735-0.304L10,11.469l7.08,7.081c0.203,0.203,0.469,0.304,0.735,0.304
								c0.267,0,0.532-0.101,0.735-0.304c0.406-0.406,0.406-1.064,0-1.469L11.469,10z"></path>
							</svg></button>';
						echo '</form>';

			    		echo '<div class="name">';
				        echo $row["full_name"];
				        echo '</div>';

				        echo '<div class="date-time-con">';
				        echo $row["photo_date_time"];
				        echo '</div>';

			    	echo '</div>';



			    	echo '<div class="photos-container-body">';
				    	echo '<a href="photos/'.$row["photo"].'"target="_blank">';
							echo '<img src="photos/'.$row["photo"].'"id="img-pic">';
						echo '</a>';
					echo '</div>';



					$get_the_photo_id = $row["photo_id"];
					echo '<div class="comment-section">';

			        $fetch_cmnts = "SELECT full_name, cmnt_txt FROM photocmnts WHERE photo_id='$get_the_photo_id'";
					$cmnt_result = mysqli_query($conn, $fetch_cmnts);

					while($row = mysqli_fetch_assoc($cmnt_result)) {


							echo '<div class="all-comments">';
								echo '<span class="cmntr-name">'.$row["full_name"];'</span>';
								echo '&nbsp;&nbsp;';
								echo '<span class="cmntr-msg">'.$row["cmnt_txt"];'</span>';
							echo '</div>';

			    	}
			        echo '</div>';


			        echo '<div class="add-comment-field">';
			        echo '
			        	  <form action="" method="POST">
			        	     <input type="hidden" name="the_photo_id" value="'.$get_the_photo_id.'">
						     <input type="text" name="cmnt_txt" autocomplete="off" maxlength="40" class="add-cmnt-inp" placeholder="Write a comment">
				             <input type="submit" name="add_cmnt" class="add-cmnt-btn" value="Post">
		 	              </form>';
			        echo '</div>';





			        echo '</div>'; //main post container close

			    }
			} else {
			    echo '<div class="zero-result">There are no photos</div>';
			}

			mysqli_close($conn);

		?>


	</div>