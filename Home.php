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
  <link rel="stylesheet" type="text/css" href="../css/Home.css">
  <!-- Website Page Title -->
  <title> Home </title>
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
            <a class="dropdown-item" href="http://35.245.253.27/Home.php"><h3>Home</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
            <!-- Dropdown Item - Faculty Page -->
	    <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.php"><h3>Faculty Page</h3></a>
	    <!-- Dropdown Divider -->
	    <div class="dropdown-divider"></div>
	    <!-- Dropdown Item - Student Research Project -->
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
	//A new session is started
	session_start();
	//If there is an active session ID
	if (isset($_SESSION['userID'])) {
		//Display logout button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/Logout.php"><h4>Logout</h4></a>';
	} else {
		//Display login button
		echo '<a class="btn btn-primary" href="http://35.245.253.27/LoginSelection.php"><h4>Login</h4></a>';
	} if(isset($_SESSION['accessLevel'])){
		if($_SESSION['accessLevel'] == 1){
		//	echo 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
		} else {
		//	$help = $_SESSION['accessLevel'];
		//	echo $help;
		}
	}
?>
      </div>
      <div class="col-sm-1"></div>
    </div>
</div>

<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
	<div class="container-fluid"> <!-- normally this would watch screen-width, but since it's in a jumbotron, it only matches jumbotron width -->
		<div class="row">
			<!-- Student Research News Header -->
      			<div class="col-sm-8"><h1>Student Research News</h1></div>
		</div>

		<!--Jumbotron for Spotlight Research Project Subheader-->
		<div class="jumbotron sub-left">
			<div class="row">
				<!--Subheader-->
				<a align="left" class="col-sm-8"><h5><b><u>Spotlight Research Project</u></b></h5></a>
			</div>
		</div>

                <!--Jumbotron for Apply for a Research Study Subheader-->
		<div class="jumbotron sub-center">
                        <div class="row">
                                <!--Subheader-->
                                <a align="left" class="col-sm-12"><h5><b><u>Apply for a Research Study</u></b></h5></a>
			</div>

			<div class="column">
				<ol>
			        	<a align="left"><li>Decide which research areas you would be interested in.</li></a>
					<a align="left"><li>Register for the <b><u>Individual Study (CPSC 491)</u></b> course.</li></a>
					<a align="left"><a href="http://35.245.253.27/FacultyPage.php"><li>View the Faculty Page</a> to see past and current research interests.</li></a>
					<a align="left"><li>Make an appointment with the faculty member whose work that interests you.</li></a>
					<a align="left"><li>Discuss your research study idea or proposal with the faculty member.</li></a>
					<a align="left"><li>For financial support, look at UMW Summer Science Institute or grants links under <b><u>Resources</u></b></li></a>
					<a align="left"><li>Once your research study proposal has been approved by a faculty member, fill out the green individual study registration form from the Registrar's office.</li></a>
				</ol>
			</div>
		</div>

                <!--Jumbotron for Resources Subheader-->
		<div class="jumbotron sub-right">
                        <div class="row">
                                <!--Subheader-->
				<a align="left" class="col-sm-2"><h5><b><u>Resources</u></b></h5></a>
			</div>

                	<div class="column">
                        	<!-- Links to 'Resources' subheader -->
                        	<a align="left" href="https://cas.umw.edu/computerscience/undergraduate-research-computer-science/"><p>UMW CS Undergraduate Research</p></a>
                        	<a align="left" href="https://cas.umw.edu/summerscienceinstitute/"><p>UMW Summer Science Institute</p></a>
                        	<a align="left" href="https://cas.umw.edu/students/undergraduate-research-grant-application-information/"><p>UMW Undergraduate Grants</p></a>
                	</div>
		</div>
  	</div>
</div>



</body>

</html>
