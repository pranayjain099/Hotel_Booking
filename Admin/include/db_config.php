<?php
// Connecting to the Database
$hname = 'localhost';
$uname = 'root';
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

        // value is overwritten and again stored in value 
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        $data[$key] = $value;
    }
    return $data; // returning the filtered data.
}
function selectAll($table)
{
    $con = $GLOBALS['con'];
    $res = mysqli_query($con, "SELECT * FROM $table");
    return $res;

}

// Takes three parameters sql query , values and datatype.
function select($sql, $values, $datatypes)
{
    // We have created 'con' variable on the top and to use that variable inside function we need to declare it globally.
    $con = $GLOBALS['con'];

    // if query gets prepared then store it in varibale else die.
    if ($stmt = mysqli_prepare($con, $sql)) {

        // now to send multiple values dynamically in mysqli_bind_param() we used splat operator (3 dots before variable).you can see $values is a array.
        // mysqli_stmta_bind_param($stmt, $datatypes, $a,$b,$c); instead of this 
        // do this beacuse we want to make this function dynamic if any other form will have 7 to 8 operator then we will need to create seperate function for that so instead take values dynamically.

        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        // after binding execute the stmt and ab uske sath values bind ho chuki h
        if (mysqli_stmt_execute($stmt)) { // if sucessfull gets executed then
            // store the result
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt); // closing the preapred statement
            return $res;
        } else {
            mysqli_stmt_close($stmt); // closing the preapred statement
            die("Query cannot be executed - select function");
        }
    } else {
        die("Query cannot be prepared - select function");
    }

}

// update function

function update($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {

            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - update function");
        }
    } else {
        die("Query cannot be prepared - update function");
    }

}

// insert function
function insert($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {

            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - insert function");
        }
    } else {
        die("Query cannot be prepared - insert function");
    }

}

// delete function

function delete($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {

            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - delete function");
        }
    } else {
        die("Query cannot be prepared - deletee function");
    }

}

?>