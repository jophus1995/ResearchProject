<?php
include 'config.php';
	//If statement to determine if connection to MySQL database was successful/unsucessful
	/*if(!$con){
        	echo "Connection to MySQL database failed";
	}else{
        	echo "Connection to MySQL database successful";
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Bootstrap 4; Sets initial zoom level and sets the width to the screen width of the viewing device -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Imports Google Font Open-Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <!-- General Stylesheet Link -->
  <link rel="stylesheet" type="text/css" href="../css/Login.css">
  <!-- Website Page Title -->
  <title> Login Selection</title>
</head>

<body>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
    <!--Login selection as student or faculty-->
    <div align="center"><form method="post" action="LoginSelection.php">
      <!-- Login Header -->
      <h1>Login</h1>
        <!-- Button to redirect a user to log in as a student -->
	<p><a class="btn btn-primary" href="http://35.245.253.27/Login.php">Continue as a Student</a></p>
	<!-- Button to redirect a user to log in as a faculty member -->
	<p><a class="btn btn-primary" href="http://35.245.253.27/FacultyLogin.php">Continue as a Faculty</a></p>
	<!-- Link to redirect user back to Home page -->
	<p><a href="http://35.245.253.27/Home.php">Return to Home Page</a></p>
    </div>


  </div>
</div>

</body>
</html>
