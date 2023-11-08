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

// Takes three parameters sql query , values and datatype.
function select($sql, $values, $datatypes)
{
    // using con varibale globally
    $con = $GLOBALS['con'];

    // if query gets prepared then store it in varibale else die.
    // stmt is variable defined by us you can give any name.
    if ($stmt = mysqli_prepare($con, $sql)) {
        // then we will bind the parameters
        // now to send multiple values dynamically in mysqli_bind_param() we used splat operator (3 dots before variable).
        // mysqli_stmta_bind_param($stmt, $datatypes, $a,$b,$c); instead of this 
        // do this
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        // after binding execute the stmt and ab uske sath values binf ho chuki h
        if (mysqli_stmt_execute($stmt)) { // if sucessfull gets executed then
            // store the result jo bhi result aaye query chalne ke baad
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt); // closing the preapred statement
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - select function");
        }
    } else {
        die("Query cannot be prepared - select function");
    }

}





?>