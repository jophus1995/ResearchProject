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
  <title> UMW Faculty & Student Research Login </title>
</head>

<body>
<div>
<?php
include 'config.php';
$mysql_host = '35.238.146.54';
$mysql_user = 'umwresearch';
$mysql_pass = 'csumw2019';
$mysql_db = 'studentfacultyDB';
//SQL Connection
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db);
//If statement to determine if connection to MySQL database was successful/unsucessful
if(!$con){
        echo "Connection to MySQL database failed";
}else{
        echo "Connection to MySQL database successful";
}

if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //Insert statement for creating an account
        $selectStatement = "SELECT email, password FROM Users WHERE email = '" . $con->real_escape_string($email) . "'"; 
        //MySQL query insert statement to studentfacultyDB database
        mysqli_query($con,$selectStatement);
}
?>
</div>



<div class="jumbotron main"> <!-- jumbotron acts like a big screen, and anything inside of it is fit to its dimensions -->
    <!--Login with Email and Password-->
    <div align="center"><form method="post" action="Home.html">
      <h1>Login</h1>
        <div>
            <!--Email Label-->
            <input type="text" placeholder="Email"name="email" required>
            <br></br>
        </div>
        <div>
            <!--Password Label-->
            <input type="password" placeholder="Password" name="password" required>
            <br></br>
        </div>
        <input class="button btn-primary" name = "login" type="submit" value="Login">
        <p> Forgot your <a href="#">password? </p></a>
        <p> Not yet a member? <a href = "http://35.245.253.27/CreateAccount.php"> Sign Up </a> </p>
        </form>
    </div>


  </div>
</div>

</body>
</html>
