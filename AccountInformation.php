<?php
include 'config.php';
	//If statement to determine if connection to MySQL database was successful/unsucessful
	if(!$con){
        	echo "Connection to MySQL database failed";
	}else{
        	echo "Connection to MySQL database successful";
	}
?>

<?php
	//Start a new session
	session_start();
	//If a session is not connected to a userID, redirect to login selection page
        if (!isset($_SESSION['userID'])) {
		header('Location: LoginSelection.php');
	}
?>

<?php
	//User's session id 	
	$user = $_SESSION['userID'];
	//SQL Query to select a user based on credentials in database
	$sql = "SELECT fname, lname, email FROM Users WHERE userID = '$user'";
	//Query result
	$result = mysqli_query($con,$sql);
	//Query row result placed in an array
	$arr = mysqli_fetch_row($result);
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
  <title> Account Information </title>
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
	    <!-- Dropdown Item - Account -->
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
	//Start a new session
	session_start();
	//If there is currently a session active
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

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
	<div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
		<div class="row">
			<!-- My Account Header -->
      			<div class="col-sm-12"><h1><center>My Account</center></h1></div>
      			<div class="col-sm-4"><p></p></div>
      			<div class="col-sm-9"></div>
		</div>

		<div class="row">
			<?php
				//Display logged in user's name
				echo '<div class="col-sm-12"><h3><center>' . 'Name: ' . $arr[0] . ' ' . $arr[1] . '</center></h3></div>';
			?>
		</div>

		<div class="row">
			<?php
				//Display logged in user's email
				echo '<div class="col-sm-12"><h3><center>' . 'Email: ' . $arr[2] . '</center></h3></div>';
			?>
		</div>

		<div class="row">
			<!-- Link to sign a user out of their account -->
			<div class="col-sm-12"><a href="http://35.245.253.27/Logout.php"><center><h3>Sign Out</h3></center></a></div>
		</div>
  	</div>
</div>

</body>
</html>
