<?php
require('../include/db_config.php');
require('../include/essentials.php');

// to check wether the admin is logged in or not.
adminLogin();

if (isset($_POST['add_room'])) {

    $features = filteration(json_decode($_POST['features']));
    $facilities = filteration(json_decode($_POST['facilities']));

    $frm_data = filteration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";

    $values = [$frm_data['name'], $frm_data['area'], $frm_data['price'], $frm_data['quanity'], $frm_data['adult'], $frm_data['children'], $frm_data['description']];

    if (insert($q1, $values, 'siiiiis')) {
        $flag = 1;
    }

    $room_id = mysqli_insert_id($con);
    $q2 = "INSERT INTO `room_facilities`(`room_id`, `facilities_id`) VALUES (?,?)";


}
?>