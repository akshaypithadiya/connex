<?php

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="posts"; // Table name 

// Connect to server and select databse.
$conn = mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect"); 

// get value of id that sent from address bar 
$id=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($conn,$sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='profile.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 