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
	//If there is not a session ID set
	if (!isset($_SESSION['userID'])) {
		//Redirect to Login Selection page
                header('Location: LoginSelection.php');
        }
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
  <!-- Website Page Title -->
  <title> Create New Submission </title>
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
<?php
	//If there is an active session ID set
	if (isset($_SESSION['userID'])) {
		//Display logout button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/Logout.php"><h4>Logout</h4></a>';
	} else {
		//Display login button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>';
	}
?>
	 </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div>
<?php
	$currdate = date("Y/m/d");
	if(isset($_POST['create'])){
		$title = $_POST['title'];
		$projdesc = $_POST['projdesc'];
		$facultysponsor = $_POST['facultysponsor'];
		$tags = $_POST['tags'];

		$tagsArray = explode(',',$tags);

		//Insert statement for creating an account
		$insertStatement = "INSERT INTO StudentSubmissions (author,facultySponsor,description,date,title) VALUES (\"" . "1" . "\",\"" . $facultysponsor . "\",\"" . $projdesc . "\",\"" . $currdate . "\",\"" . $title . "\")";
		//MySQL query insert statement to studentfacultyDB databas
		echo $insertStatement;
		mysqli_query($con,$insertStatement);


	}
?>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotr
on width -->
    <div class="row">
      <div class="col-sm-3"><h1>Create/Edit Submission</h1></div>
      <div class="col-sm-2"></div>
    </div>


<div>
    <form action="CreateSubmission.php" method="post">
	<div class="container">
	<br></br>
	    <label for="title"><b>Title:</b></label>
		<input type="text" name="title" required>
		<br></br>
	    <label for="projdesc"><b>Project Description:</b></label>
	    <textarea class="form-control" text="projdesc" rows="5" name="projdesc" required>
		</textarea>
		<br></br>

	    <label for="facultysponsor"><b>Faculty Sponsor:</b></label>
	    <input list="sponsors" name="facultysponsor"/ >
		<datalist id="sponsors">
		  <option value="Dr. Ian Finlayson">
		  <option value="Dr. Jennifer Polack">
		  <option value="Dr. Karen Anewalt">
		  <option value="Dr. Veena Ravishankar">
		</datalist>


		<br></br>
	    <label for="tags"><b>Tags (Enter 1 - 3 separate by comma):</b></label>
	    <input type="text" name="tags" required>
		<br></br>

	    <input type="submit" name="create" value="Submit">
	</div>
	</form>
    </div>
</body>
<html>


