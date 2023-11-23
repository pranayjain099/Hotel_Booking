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
if (isset($_POST['update_general'])) {

    $frm_data = filteration($_POST);
    $q = "UPDATE `settings` SET `site_title`=?,`site_about`=?  WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');
    echo $res;
}


?>