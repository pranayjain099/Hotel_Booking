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

// This function will filter the data
// We will recieve data in form of associative array
function filteration($data)
{
    foreach ($data as $key => $value) {
        // We will use 4 function to filter the data.
        // We will filter the data and again store that in the data so the previous value will be overwritten.
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);

    }
    return $data; // returning the filtered data.
}

// function for prepared statement
// in prepared statement we preapre the query then bind the parameters in statements then execute it and we get the result

function select()





?>