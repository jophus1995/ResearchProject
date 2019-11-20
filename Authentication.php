<?php
include 'config.php';

//If statement to determine if connection to MySQL database was successful/unsucessful
if(!$con){
        echo "Connection to MySQL database failed";
}else{
        echo "Connection to MySQL database successful";
}

//Start a new session
session_start();
//Email queried from MySQL database 
$email = mysqli_real_escape_string($con, $_POST['email']);
//Password queried from MySQL database
$password = mysqli_real_escape_string($con, $_POST['password']);
//SQL Statement to find student from Users table
$sql = "SELECT userID FROM Users WHERE email = '$email' AND password = '$password'";
//SQL query result
$result = mysqli_query($con,$sql);
//Count of how many rows resulted from query
$count = mysqli_num_rows($result);
//If the number of rows from query result is 1
if($count == 1){
	//SQL query result is placed in an array
	$arr = mysqli_fetch_row($result);
	//Session ID is the first element of the array
	$_SESSION['userID'] = $arr[0];
	//Redirect user to Home page
        header("Location: Home.php");	
} else {
	//Redirect user back to Login page
	header("Location: Login.php");
}
?>
