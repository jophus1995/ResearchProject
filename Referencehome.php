
<!--Andy Luong-->
<!DOCTYPE html>

<html>
<body>

<title>Team Blue - Home Page</title>

<!--Whale Banner GIF Image-->
<div align="center" class="whale">
<img src="whale.gif" alt="This will display an animated GIF" width="2000" height="100"/>
</div>

<!--Display the Current Date and Time-->
<div class="time" align="right">
<?php
        echo "<h3> Current date: " . date("l m-d-Y") . "<br> </h3> ";
        date_default_timezone_set("America/New_York");
        echo "<h3> Current time: " . date("h:i:sa") . "<br> </h3>";
?>
</div>

<!--Links to webpages-->
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

<!--Panda GIF Image-->
<div align="center">
<img src="panda.gif" alt="This will display an animated GIF" />
</div>

<h1>Home Page</h1>
<head>
<link rel="stylesheet" href="animal.css">
</head>
<!--header('Content-Type: text/html; charset=utf-8');-->

<?php

session_start();
if (!isset($_SESSION["username"])) {
   header("Location: login.php");
   die;
}

//Welcome JavaScript Pop-up Message for User
$username = $_SESSION["username"];
        $message = "Welcome, $username!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "<p>Welcome, $username!</p>";

//Log Out of Account
if(isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        $message = "$username successfully logged out!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        //echo "You successfully logged out";
}

//Connection to MySQL Server Database
include("credentials.php");
        $dbuser = $username;
        $dbpass = $password;
        $mysqli = new mysqli("localhost", $dbuser, $dbpass, "Team_350_Fall18_Blue");

//SQL Select Statement for Ordering Column 
$sql_select = "SELECT * FROM Animal ORDER BY " . $_GET['Sort'];
if($_GET['Sort'] == '') {
        $sql_select = "SELECT * FROM Animal";
}
        //SQL Query Result to Display All Rows From Animal Table
        $result = mysqli_query($mysqli, $sql_select);
        $num_rows =  mysqli_num_rows($result);
              
        //Start of Animal Table
        echo "<table>";
        //Table Headers
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=animal_id"> Sort By Animal ID </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=common_name"> Sort By Common Name </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=scientific_name"> Sort By Scientific Name </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=animal_type"> Sort By Animal Type </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=diet_type"> Sort By Diet Type </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=average_height"> Sort By Average Height </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=average_weight"> Sort By Average Weight </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=average_lifespan"> Sort By Average Lifespan </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=conservation_status"> Sort By Conservation Status </a>' . '</th>';
        echo '<th>' . '<a href="http://cs.umw.edu/~aluong/group_project/home.php?Sort=population"> Sort By Population </a>' . '</th>';
                       
        //Table Rows         
        if($num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>" . "<td>" . $row["animal_id"] . " " ."</td>"
                                . "<td>" . $row["common_name"] . " " . "</td>"
                                . "<td>" . $row["scientific_name"] . " " . "</td>"
                                . "<td>" . $row["animal_type"] . " " . "</td>"
                                . "<td>" . $row["diet_type"] . " " ."</td>"
                                . "<td>" . $row["average_height"] . " " . "</td>"
                                . "<td>" . $row["average_weight"] . " " . "</td>"
                                . "<td>" . $row["average_lifespan"] . " " . "</td>"
                                . "<td>" . $row["conservation_status"] . " " . "</td>"
                                . "<td>" . $row["population"] . "<br>" . "</tr>";
                }
        }
        //End of Animal Table
        echo "</table>";
        //Close Connection to MySQL Server Connection
        mysqli_close($mysqli);

?>

</body>
<html>
