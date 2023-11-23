<?php

require('../include/db_config.php');
require('../include/essentials.php');

// to check wether the admin is logged in or not.
adminLogin();

if (isset($_POST['get_general'])) {
    // iss ddatabse mein ek he record hoga becoz site title and description ek he toh hoga site ka so always srno=1.
    $q = "SELECT * from `settings` Where `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");  // select function is present in include/db_config.
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);  // json_encode converts data(array, object etc) into json string
    echo $json_data;
}


?>