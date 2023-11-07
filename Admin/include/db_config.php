<!-- This is the main file for all the crud operations , All the queries will be fired from here only , We will make dynamic queries , queries that will filter the data-->

<?php

$hname = 'localhost'; // Hostname
$uname = 'root'; // username
$pass = "";
$db = '7_star';

$con = mysqli_connect($hname, $uname, $pass, $db);
if (!$con) {
    die('Cannot connect to database' . mysqli_connect_error());
}
?>