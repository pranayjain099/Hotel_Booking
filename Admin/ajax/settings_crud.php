<?php

require('../include/db_config.php');
require('../include/essentials.php');

// to check wether the admin is logged in or not.
adminLogin();

if (isset($_POST['get_general'])) {
    // iss ddatabse mein ek he record hoga becoz site title and description ek he toh hoga site ka so always srno=1.
    $q = "SELECT * FROM `settings` Where `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");  // select function is present in include/db_config.
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);  // json_encode converts data(array, object etc) into json string
    echo $json_data;
}

// update general
if (isset($_POST['update_general'])) {

    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?,`site_about`=?  WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi'); // ssi means type of data string interger integer
    echo $res;
}

// update shutdown
if (isset($_POST['update_shutdown'])) {

    // frm_data will contain either 0 or 1 now agar site on hai and we shut the site then function call hoga and 0 pass hoga and hume 1 krna hai so yaha hum if else laga rahe agar 0 aara hai toh 1 krdo or 1 aara toh 0 krdo.
    $frm_data = ($_POST['update_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET  `shutdown`=?  WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');  // ii means integer integer
    echo $res;
}


?>