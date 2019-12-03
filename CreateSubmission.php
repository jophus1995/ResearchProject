<?php
include 'config.php';
	//If statement to determine if connection to MySQL database was successful/unsucessful
	/*if(!$con){
        	echo "Connection to MySQL database failed";
	}else{
        	echo "Connection to MySQL database successful";
	}*/

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
  <link rel="stylesheet" type="text/css" href="../css/CreateSubmission.css">
  <!-- Website Page Title -->
  <title> Create New Submission </title>
</head>
<body>


<!-- Container for header -->
<div class="container-fluid"> <!-- container-fluid is a full width container. it scales to the screen width -->
    <div class="row">
    <div class="topnav">
        <div class="span-12">
                        <a href="#home"><img src="inc/home.png" width="15" height = "15"><br>Home</a>
                        <a href="#t3"><img src="inc/wrench.png" width="15" height = "15"><br>Tools, Tips, and Tricks</a>
                        <a href="#intern"><img src="inc/briefcase.png" width="15" height = "15"><br>Internships</a>
                        <a href="#ctf"><img src="inc/flag.png" width="15" height = "15"><br>Capture the Flag</a>
                        <a href="#alumni"><img src="inc/persons.png" width="15" height = "15"><br>Alumni</a>
                        <a href="http://35.245.253.27/Home.php"><img src="inc/books.png" width="15" height = "15"><br>Research</a>
    </div>
    </div>
    </div>
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
      <div class="col-sm-6"><h1>Faculty & Student Research</h1></div>
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
//	if(isset($_POST(['create'])){
	$currdate = date("Y/m/d");
	$title = $_POST['title'];
	$projdesc = $_POST['projdesc'];
	$facultysponsor = $_POST['facultysponsor'];
	$userID = $_SESSION['userID'];
	$tags1 = $_POST['tags1'];
	$tags2 = $_POST['tags2'];
	$tags3 = $_POST['tags3'];
		


		//Insert statement for submission
		$insertStatement = "INSERT INTO StudentSubmission (author,facultySponsor,description,date,title) VALUES (\"" . $userID . "\",\"" . $facultysponsor . "\",\"" . $projdesc . "\",\"" . $currdate . "\",\"" . $title . "\")";
		//$sql = "INSERT INTO StudentSubmission (author, facultySponsor, description, date, title) VALUES (9, 'Dr. Jennifer Polack', 'mmm', 2019/12/02, 'lel')";

		//MySQL query insert statement to studentfacultyDB databas
		
		echo $insertStatement;
		mysqli_query($con,$insertStatement);
		echo 'AfterQuery';
//	}

?>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
  <div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotr
on width -->
    <div class="row">
      <div class="col-sm-6"><h1>Create/Edit Submission</h1></div>
      <div class="col-sm-2"></div>
    </div>


<div>
    <form action="SubmissionSuccessful.php" method="POST">
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
		  <option value="Professor Gusty Cooper">
		  <option value="Dr. Stephen Davies">
		  <option value="Dr. Andrew Marshall">
		  <option value="Dr. Ron Zacharski">
		  <option value="Dr. Jessica Zeitz">
		</datalist>

		<br></br>
	    <label for="tags1"><b>Tag 1:</b></label>
	    <input list="tagList1" name="tags1" required>
		<datalist id = 'tagList1'>
		<option value="Mobile">
		<option value="Robotics">
		<option value="Game Programming">
		<option value="Graphic Design">
		<option value="AI">
		<option value="Data Science">
		<option value="Databases">
		<option value="Cyber Security">
		<option value="Operating Systems">
		<option value="Object Oriented">
		<option value="Programming">
		<option value="Human Computer Interaction">
		</datalist>

		<br></br>
		<label for="tags2"><b>Tag 2:</b></label>
		<input list="tagList2" name="tags2" required>
		    <datalist id = 'tagList2'>
		    <option value="N/A">
		    <option value="Mobile">
		    <option value="Robotics">
		    <option value="Game Programming">
		    <option value="Graphic Design">
		    <option value="AI">
		    <option value="Data Science">
		    <option value="Databases">
		    <option value="Cyber Security">
		    <option value="Operating Systems">
		    <option value="Object Oriented">
		    <option value="Programming">
		    <option value="Human Computer Interaction">
			</datalist>
		<br></br>

	    <label for="tags3"><b>Tag 3:</b></label>
	    <input list="tagList3" name="tags3" required>
		<datalist id = 'tagList3'>
		<option value="N/A">
		<option value="Mobile">
		<option value="Robotics">
		<option value="Game Programming">
		<option value="Graphic Design">
		<option value="AI">
		<option value="Data Science">
		<option value="Databases">
		<option value="Cyber Security">
		<option value="Operating Systems">
		<option value="Object Oriented">
		<option value="Programming">
		<option value="Human Computer Interaction">
		</datalist>
		<br></br>		

	    <input type="submit" name="create" value="Submit">
	</div>
	</form>
    </div>
</body>
<html>


