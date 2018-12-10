<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime";//changed the data base name

// Create connection
$dbcon = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

?>