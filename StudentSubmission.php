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
  <link rel="stylesheet" type="text/css" href="../css/BootstrapTemplate.css">
  <!-- Website Page Title -->
  <title> Student Research Projects </title>
</head>

<body>
<!-- Container for header -->
<div class="container-fluid"> <!-- container-fluid is a full width container. it scales to the screen width -->
    <div class="row header"> <!-- each row can contain up to 12 columns. no matter what, all col must add up to 12 -->
      <div class="col-sm-1">
	<!-- Dropdown Button -->
	<div class="dropdown">
	  <button type="button" class="btn" data-toggle="dropdown">
	    <img src='../inc/burger-menu.jpg' class='img-fluid'>
	  </button>
	  <!-- Dropdown Menu -->
	  <div class="dropdown-menu">
	    <!-- Dropdown Item - Home -->
	    <a class="dropdown-item" href="http://35.245.253.27/Home.php"><h3>Home</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Faculty Page -->
	    <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.php"><h3>Faculty Page</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Student Research Projects -->
	    <a class="dropdown-item" href="http://35.245.253.27/StudentSubmission.php"><h3>Browse Submissions</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Account Information -->
	    <a class="dropdown-item" href="http://35.245.253.27/AccountInformation.php"><h3>Account</h3></a>
	  </div>
	</div>
      </div>
      <!-- Faculty & Student Research Header -->
      <div class="col-sm-6"><h1>Faculty & Student<br> Research</h1></div>
      <div class="col-sm-3"></div>
      <!-- Login Button -->
      <div class="col-sm-1">
<?php
include 'config.php';
//If statement to determine if connection to MySQL database was successful/unsucessful
/*if(!$con){
	echo "Connection to MySQL database failed";
}else{
	echo "Connection to MySQL database successful";
}*/
//New session is started
session_start();
//If there is an active session ID
if (isset($_SESSION['userID'])) {
	//Display Logout button
	echo '<a class="btn btn-primary" href="http://35.245.253.27/Logout.php"><h4>Logout</h4></a>';
} else {
	//Display Login button
	echo '<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>';
}

?>
	</div>
      <div class="col-sm-1"></div>
    </div>




<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
    <div class="row">
      <!-- Student Research Projects Header -->
      <div class="col-sm-8"><h1>Student Research Projects</h1></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-9"></div>
    </div>

<!--Create Submission Button -->
<div class="col-sm-4">
	<a class="btn btn-primary" href="http://35.245.253.27/CreateSubmission.php"><h5>Create Submission</h5></a>
</div>

</div>
</div>

<table>

  <tr>
	<th>Title</th>
	<th>Author</th>
	<th>Faculty Sponsor</th>
	<th>Description</th>
	<th>Date</th>
  </tr>
<?php

$sqlget = "Select title, author, facultySponsor, date From StudentSubmissions";
$sqldata = mysqli_query($con,$sqlget) or die('error getting data');
echo "<table>";
echo "<tr><th>Title </th><th>Author </th><th>Faculty Sponsor </th><th>Date </th></tr>";

/*while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo "<tr><td>";
	echo $row['title'];
	echo "</td><td>";
	echo $row['author'];
	echo "</td><td>";
	echo $row['facultySponsor'];
	echo "</td><td>";1
	echo $row['date'];
	echo "</td></tr>";

}
 */ 
echo "</table>";
?>
</table>
</body>
</html>
