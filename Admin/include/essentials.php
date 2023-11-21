<?php


//  Check if admin is logged in

function adminLogin()
{
    session_start();
    // agar adminlogin naam ka index set nhi hai or uski value true nhi hai 
    if (!(isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)) {
        redirect("myindex.php");
    }
    session_regenerate_id(true);
}


// Redirect funtion = It will take url as arguent and this function will redirect us to that url.
function redirect($url)
{
    echo "<script>
        window.location.href='$url';
    </script>";
}

function alert($type, $msg)
{
    // if suncess login then alert-success class else alert-danger class , stored that in varibale and then added in class.
    $bs_class = ($type == "success") ? "alert-sucess" : "alert-danger";
    // this is hero doc method of printing we have taken bootstrap dismissble alert.
    // no extra space , proper indent alert at start and end.
    echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">$msg</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            alert;
}
