<!--Register Page-->
<!--Team Blue-->
<!--Andy Luong-->
<!--Anthony Phimmasone-->
<!--Brian Justice-->
<!DOCTYPE html>

<html>
<body>
<?php
include("credentials.php");
$dbuser = $username;
$dbpass = $password;

// If POST then create account
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Get values submitted from the form
$username = $_POST["username"];
$password = $_POST["password"];

// Hash the password
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

// Insert username and password hash into Users table
$mysqli = new mysqli("localhost", $dbuser, $dbpass, "Team_350_Fall18_Blue");

if(!$mysqli) {
                echo "MySQL connection failed! <br>";
        } else {
                echo "MySQL connection success! <br>";
        }       

//SQL Insert Statement for Creating an Account Into Database        
$sql = "INSERT INTO Users VALUES ('" . $mysqli->real_escape_string($username) . "', '$passwordHash')";
if ($mysqli->query($sql)) {
echo "<p>Your account has been created.</p>",
     "<p><a href='login.php'>Login</a></p></html>";
die; 
}
//Username Has Already Been Taken
elseif ($mysqli->errno == 1062) {
echo "<p>The username <strong>$username</strong> already exists.",
 "Please choose another.</p>";
}
else {
die("Error ($mysqli->errno) $mysqli->error");
}         
}
?>

<title>Team Blue - Register Page </title>

<!--Display the Current Date and Time-->
<div class="time" align="right">
<?php
        echo "<h3> Current date: " . date("l m-d-Y") . "<br> </h3> ";
        date_default_timezone_set("America/New_York");
        echo "<h3> Current time: " . date("h:i:sa") . "<br> </h3>";
?>
</div>

<!--Links to Webpages-->
<div class="ridge">
<p><a href="http://cs.umw.edu/~aluong/group_project/home.php">Home Page</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/login.php">Login</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/register.php">Register</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/search.php">Search Database</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/modify.php">Modify Database</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/delete.php">Delete from Database</a></p>
<p><a href="http://cs.umw.edu/~aluong/group_project/about.php">About</a></p>
<p><a href='http://cs.umw.edu/~aluong/group_project/home.php?logout=true'>Click Here to Logout</a></p>
</div>

<h1>Register Page</h1>
<head>
<link rel="stylesheet" href="animal.css">
</head>

<form method="post" action="register.php">
<div class="container" align="center">

<!--Text Boxes to Create an Account-->
<p>Please fill in this form to create an account.</p>
<label>First Name: <input type="text" placeholder="Enter First Name" name="firstname" required></label>
<br></br>
<label>Last Name: <input type="text" placeholder="Enter Last Name" name="lastname" required></label>
<br></br>
<label>Email: <input type="text" placeholder="Enter Email" name="email" required></label>
<br></br>
<label>Username: <input type="text" placeholder="Enter Username" name="username" autofocus required></label>
<br></br>
<label>Password: <input type="password" placeholder="Enter Password" name="password" required></label>
<br></br>
<input type="submit" value="Register">

<p>By creating an account you agree to our <a href="http://cs.umw.edu/~aluong/group_project/about.php">Terms</a>.</p>

<p>Already have an account? <a href="http://cs.umw.edu/~aluong/group_project/login.php">Login</a>.</p>
  </div>
</form>

</body>
<html>
