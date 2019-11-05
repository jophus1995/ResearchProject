<?php
    include("credentials.php");
    // Connect and select the "test" database
    $mysqli = new mysqli("localhost", $username, $password, "CPSC_350_aphimmas");

    // Output error info if there is a connection problem
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: ($mysqli->connect_errno) $mysqli->connect_error");
    }
?>
