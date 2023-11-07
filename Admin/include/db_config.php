<!-- This is the main file for all the crud operations , All the queries will be fired from here only , We will make dynamic queries , queries that will filter the data-->

<?php
// Connecting to the Database
$hname = 'localhost'; // Hostname
$uname = 'root'; // username
$pass = "";
$db = '7_star';

// Create a connection
$con = mysqli_connect($hname, $uname, $pass, $db);

// Die if connection was not successful
if (!$con) {
    die('Cannot connect to database' . mysqli_connect_error());
}
?>