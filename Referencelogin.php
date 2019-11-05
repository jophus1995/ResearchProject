<!--Login Page-->
<!--Team Blue-->
<!--Andy Luong-->
<!--Anthony Phimmasone-->
<!--Brian Justice-->
<!DOCTYPE html>

<html>
<body>

<title> Team Blue - Login Page </title>

<!--Display the Current Date and Time-->
<div class="time" align="right">
<?php
        echo "<h3> Current date: " . date("l m-d-Y") . "<br> </h3> ";
        date_default_timezone_set("America/New_York");
        echo "<h3> Current time: " . date("h:i:sa") . "<br> </h3>";
?>

<h1>Login</h1>

<?php
//If POST then check submitted username and password
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   include("credentials.php");
   $dbuser = $username;
   $dbpass = $password;

   // Get values submitted from the form
   $username = $_POST["username"];
   $password = $_POST["password"];

   //Get user's hashed password from the Users table
   $mysqli = new mysqli("localhost", $dbuser, $dbpass, "Team_350_Fall18_Blue");

        if(!$mysqli) {
                        echo "MySQL connection failed! <br>";
                } else {
                        echo "MySQL connection success! <br>";
                }
   //SQL Select Statement to Retrieve Username From Users Table
   $sql = "SELECT username, password FROM Users WHERE username='" . $mysqli->real_escape_string($username) . "'";
   //Username Result for SQL Select Statement
   $result = $mysqli->query($sql);
   if (!$result) {
      die("Error executing query: ($mysqli->errno) $mysqli->error");
   }
   //Incorrect Username or Password
   elseif ($result->num_rows == 0) {
   echo "<p>Incorrect username or password.</p>";
   }
   else {
      $row = $result->fetch_assoc();

      // See if submitted password matches the hash stored in the Users table    
      if (password_verify($password, $row["password"])) {
         session_start();
         $_SESSION["username"] = $username;
         header("Location: home.php");
         die;
      }
      else {
         echo "<p>Incorrect username or password.</p>";
      }
   }
}
?>

<!--Login with Username and Password-->
<div align="center"><form method="post" action="login.php">
      <div>
        <!--Username Label-->
        <label>Username: <input type="text" placeholder="Enter Username"name="username" autofocus required></label>
		<br></br>
      </div>
      <div>
        <!--Password Label-->
        <label>Password: <input type="password" placeholder="Enter Password" name="password" required></label>
		<br></br>
      </div>
      <input type="submit" value="Login">
    </form></div>
</body>
</html>

