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
    <title> UMW Faculty & Student Research - Create New Account </title>
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
          <div class="dropdown-menu">
            <a class="dropdown-item" href="http://35.245.253.27//Home.html"><h3>Home</h3></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.html"><h3>Faculty Page</h3></a>
            <div class="dropdown-divider"></div>
	    <a class="dropdown-item" href="http://35.245.253.27/StudentSubmission.html"><h3>Browse Submissions</h3></a>

</div>
        </div>
      </div>
      <div class="col-sm-6"><h1>Faculty & Student<br> Research</h1></div>
      <div class="col-sm-3"></div>
      <!-- Login Button -->
      <div class="col-sm-1">
        <a class="btn btn-primary" href="http://35.245.253.27/Login.html"><h4>Login</h4></a>
      </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div>
<?php
include 'config.php';

//If statement to determine if connection to MySQL database was successful/unsucessful
if(!$con){
        echo "Connection to MySQL database failed";
}else{
        echo "Connection to MySQL database successful";
}

if(isset($_POST['create'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dateofbirth = $_POST['dateofbirth'];
        $expectedgraduation = $_POST['expectedgraduation'];
        //Insert statement for creating an account
        $insertStatement = "INSERT INTO Users (email,password,fname,lname,accessLevel,dateOfBirth) VALUES (\"" . $email . "\",\"" . $password . "\",\"" . $firstname . "\",\"" . $lastname . "\",\"" . "0" . "\",\"" . $dateofbirth . "\")";
        //MySQL query insert statement to studentfacultyDB database
        mysqli_query($con,$insertStatement);

}
?>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotr
on width -->
    <div class="row">
      <div class="col-sm-5"><h1>Create Account</h1></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-9"></div>
    </div>


<div>
    <form action="CreateAccount.php" method="post">
        <div class="container">
        <br></br>
            <label for="firstname"><b>First Name:</b></label>
                <input type="text" name="firstname" required>
                <br></br>
            <label for="lastname"><b>Last Name:</b></label>
            <input type="text" name="lastname" required>
                <br></br>
            <label for="email"><b>Email:</b></label>
            <input type="text" name="email" required>
                <br></br>
            <label for="confirmationemail"><b>Confirmation Email:</b></label>
            <input type="text" name="confirmationemail" required>
                <br></br>
            <label for="password"><b>Password:</b></label>
            <input type="password" name ="password" required>
                <br></br>
            <label for="confirmationpassword"><b>Confirmation Password:</b></label>
            <input type="password" name="confirmationpassword" required>
                <br></br>
            <label for="dateofbirth"><b>Date Of Birth:</b></label>
            <input type="Date" name="dateofbirth" required>
                <br></br>
            <label for="expectedgraduation"><b>Expected Graduation:</b></label>
            <input type="text" name="expectedgraduation" required>
                <br></br>
            <input type="submit" name="create" value="Submit">
        </div>
        </form>
    </div>
</body>
<html>


