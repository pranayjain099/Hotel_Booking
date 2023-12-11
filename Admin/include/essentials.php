<?php

// Frontend purpose data

define('SITE_URL', 'http://127.0.0.1/Hotel_Booking/');
define('ABOUT_IMG_PATH', '../image/about/');
define('CAROUSEL_IMG_PATH', '../image/carousel/');
define('CAROUSEL_IMG_PATH1', '../Hotel_Booking/image/carousel/');

// backend upload process needs this data
define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/Hotel_Booking/image/');

define('ABOUT_FOLDER', 'about/');
define('CAROUSEL_FOLDER', 'carousel/');

//  Check if admin is logged in

function adminLogin()
{
    session_start();
    // agar adminlogin naam ka index set nhi hai or uski value true nhi hai 
    if (!(isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)) {
        redirect("myindex.php");
    }

}

// Redirect funtion = It will take url as arguent and this function will redirect us to that url.
function redirect($url)
{
    echo "<script>
        window.location.href='$url';
    </script>";
    exit;
}

function alert($type, $msg)
{
    // if suncess login then alert-success class else alert-danger class , stored that in varibale and then added in class.
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    // this is hero doc method of printing we have taken bootstrap dismissble alert.
    // no extra space , proper indent alert at start and end.
    echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">$msg</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            alert;
}

function uploadImage($image, $folder)
{
    $valid_mime = ['image/jpeg', 'image/png', 'image/webp'];
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img';  // invalid image mine or format
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size';  // invalid size greater then 2mb
    } else {
        // extracting extension of image
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' . random_int(11111, 99999) . ".$ext";
        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname;
        } else {
            return 'update_failed';
        }
    }
}

// delete image
function deleteImage($image, $folder)
{

    // unlink function is used for image deletion
    if (unlink(UPLOAD_IMAGE_PATH . $folder . $image)) {
        return true;
    } else {
        return false;
    }
}

?>