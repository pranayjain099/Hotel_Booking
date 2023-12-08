<?php
require('../include/db_config.php');
require('../include/essentials.php');

// to check wether the admin is logged in or not.
adminLogin();


if (isset($_POST['add_image'])) {

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
if (isset($_POST['get_carousel'])) {

    $res = selectAll('team_details');

    while ($row = mysqli_fetch_assoc($res)) {
        $path = ABOUT_IMG_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                    <img src="$path$row[picture]" class="card-img">
                    <div class="card-img-overlay text-end">
                        <button type="button" onclick="rem_member($row[sr_no])" class="btn btn-danger btn-sm shadow-none">
                            <i class="bi bi-trash"></i> Delete
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