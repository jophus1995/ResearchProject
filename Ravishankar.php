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
  <title> Computer Science Faculty </title>
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
          <div class="dropdown-menu">
            <a class="dropdown-item" href="http://35.245.253.27/Home.php"><h3>Home</h3></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://35.245.253.27/FacultyPage.php"><h3>Faculty Page</h3></a>
            <div class="dropdown-divider"></div>
	    <a class="dropdown-item" href="http://35.245.253.27/StudentSubmission.php"><h3>Browse Submissions</h3></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://35.245.253.27/AccountInformation.php"><h3>Account</h3></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6"><h1>Faculty & Student Research</h1></div>
      <div class="col-sm-3"></div>
      <!-- Login Button -->
      <div class="col-sm-1">
<?php
        session_start();
if (isset($_SESSION['userID'])) {
                echo '<a class="btn btn-primary" href="http://35.245.253.27/Logout.php"><h4>Logout</h4></a>';
        } else {
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
      <div class="col-sm-5"><h1>Meet our Faculty</h1></div>
      <div class="col-sm-2"></div>
      <div class="col-sm-9"></div>
    </div>
    <div class="row"><div class="span12">  <hr></div>  </div>
    
    <div class="row">
      <div class="col-sm-3">  <img src='../inc/VeenaR.jpg' class='img-fluid'> </div>
      <div class="col-sm-9">  <h4> Dr. Veena Ravishankar </h4> <p>Email: vravisha<!-- >@. -->&#64<!-- >@. -->umw<!-- >@. -->.<!-- >@. -->edu <br> Research Interests: Computational Logic, Security, Health Informatics, Computational Sociolinguistics 
      </p> </div>
    </div>
    <div class="row">
      <div class="col-sm-12"> <p> Recent Publications: <br> Christopher Lynch, Andrew M. Marshall, Catherine Meadows, Paliath Narendran, Veena Ravishankar: On Asymmetric Unication for the Theory of XOR with a Homomorphism. The 12th International Symposium on Frontiers of Combining Systems, FroCoS 2019. <br> Christopher Lynch, Andrew M. Marshall, Catherine Meadows, Paliath Narendran, Veena Ravishankar: On Asymmetric Unication for the Theory of XOR with a Homomorphism (Extended Abstract). The 33rd International Workshop on Unication 2019.  </p> </div>
    </div>
    <div class = "row"> </div>
  </div>
</div>

</body>

</html>
