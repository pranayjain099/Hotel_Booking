<?php
require('../include/db_config.php');
require('../include/essentials.php');

// to check wether the admin is logged in or not.
adminLogin();

// Get general 
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

    // frm_data will contain either 0 or 1 now agar site on hai and we shut the site then function call hoga and 1 pass hoga and hume 0 krna hai so yaha hum if else laga rahe agar 0 aara hai toh 1 krdo or 1 aara toh 0 krdo.
    $frm_data = ($_POST['update_shutdown'] == 0) ? 1 : 0;
    $q = "UPDATE `settings` SET  `shutdown`=?  WHERE `sr_no`=?";
    $values = [$frm_data, 1];
    $res = update($q, $values, 'ii');  // ii means integer integer
    echo $res;
}

// get contacts
if (isset($_POST['get_contacts'])) {
    $q = "SELECT * FROM `contact_details` Where `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

// update contacts
if (isset($_POST['update_contacts'])) {

    $frm_data = filteration($_POST);
    $q = "UPDATE `contact_details` SET `address`=?,`gmap`=?,`pn1`=?,`pn2`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`iframe`=? WHERE `sr_no`=?";

    $values = [$frm_data['address'], $frm_data['gmap'], $frm_data['pn1'], $frm_data['pn2'], $frm_data['email'], $frm_data['fb'], $frm_data['insta'], $frm_data['tw'], $frm_data['iframe'], 1];

    $res = update($q, $values, 'sssssssssi');
    echo $res;
}

// Management team

if (isset($_POST['add_member'])) {

    $frm_data = filteration($_POST);

    $img_r = uploadImage($_FILES['picture'], ABOUT_FOLDER);

    if ($img_r == 'inv_img') {
        echo $img_r;
    } else if ($img_r == 'inv_size') {
        echo $img_r;
    } else if ($img_r == 'update_failed') {
        echo $img_r;
    } else {
        $q = "INSERT INTO `team_details`(`name`, `picture`) VALUES (?,?)";
        $values = [$frm_data['name'], $img_r];
        $res = insert($q, $values, 'ss');
        echo $res;
    }
}
if (isset($_POST['get_members'])) {

    $res = selectAll('team_details');

    while ($row = mysqli_fetch_assoc($res)) {
        $path = ABOUT_IMG_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                    <img src="$path$row[picture]" class="card-img">
                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    <p class="card-text text-center px-3 py-2">$row[name]</p>
                </div>
            </div>     
        data;
    }
}
if (isset($_POST['rem_member'])) {

    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_member']];

    $pre_q = "SELECT* FROM `team_details` WHERE `sr_no`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);

    if (deleteImage($img['picture'], ABOUT_FOLDER)) {
        $q = "DELETE FROM `team_details` WHERE `sr_no`=?";
        $res = delete($q, $values, 'i');
        echo $res;

    } else {
        echo 0;
    }
}
?>