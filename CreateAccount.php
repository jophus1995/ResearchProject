<?php
include 'config.php';

//If statement to determine if connection to MySQL database was successful/unsucessful
/*if(!$con){
        echo "Connection to MySQL database failed";
}else{
        echo "Connection to MySQL database successful";
}*/

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$dateofbirth = $_POST['DOB'];
//Insert statement for creating an account
$insertStatement = "INSERT INTO Users (email,password,fname,lname,accessLevel,dateOfBirth) VALUES (\"" . $email . "\",\"" . $password . "\",\"" . $firstname . "\",\"" . $lastname . "\",\"" . "0" . "\",\"" . $dateofbirth . "\")";
//MySQL insert statement query
mysqli_query($con,$insertStatement);
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
  <link rel="stylesheet" type="text/css" href="../css/BootstrapTemplate.css">
  <!-- Website Page Title-->  
  <title> Create New Account </title>
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
	    <a class="dropdown-item" href="http://35.245.253.27//Home.php"><h3>Home</h3></a>
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
	<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>
      </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div class="jumbotro main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
    <div class="row">
      <!-- Create Account Header -->
      <div class="col-sm-5"><h1>Create Account</h1></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-5"></div>
    </div>
    <div class="row">
      <!-- Create Account Form -->
      <form action="CreateAccount.php" method="POST">
	<div class="form-group">
          <!-- First Name Label -->
	  <label for="fname">First Name:</label>
	  <input type="text" placeholder="First Name" class="form-control" name="fname">
	</div>
	<div class="form-group">
	  <!-- Last Name Label -->
	  <label for="lname">Last Name</label>
	  <input type="text" placeholder="Last Name" class="form-control" name="lname">
	</div>
	<div class="form-group">
	  <!-- Email Label -->
	  <label for="email">Email Address:</label>
	  <input type="email" placeholder="Email Address" class="form-control" name="email">
	</div>
	<div class="form-group">
          <!-- Email Confirmation Label -->
	  <label for="emailCon">Confirm Email Address:</label>
	  <input type="emailCon" placeholder="Confirm Email Address" class="form-control" name="emailCon">
	</div>
	<div class="form-group">
	  <!-- Password Label -->
	  <label for="pwd">Password:</label>
	  <input type="password" placeholder="Password" class="form-control" name="pwd">
	</div>
	<div class="form-group">
	  <!-- Password Confirmation Label -->
	  <label for="passCon">Confirm Password:</label>
	  <input type="password" placeholder="Confirm Password" class="form-control" name="passCon">
	</div>
	<div class="form-group">
	  <!-- Date of Birth Label -->
	  <label for="DOB">Date of Birth</label>
	  <input type="date" placeholder="Date of Birth" class="form-control" name="DOB">
	</div>
	<!-- Submit Button -->
	<button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>

  </div>
</div>



</body>
</html>
