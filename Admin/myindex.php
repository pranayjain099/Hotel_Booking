<!-- Including db_config and essentials -->
<?php
require('include\db_config.php');
require('include\essentials.php');

// Starting the session
session_start();

// Condittion On pressing back button , if already these session variabales are set means you are logged in and after login of you try to visit login page then you will be redirected to dashboard page.
if ((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)) {
    redirect("dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php
    require('include/links.php');
    ?>
    <style>
        /* Making the div at the center of screen */
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <!-- We dont want to send the data so action nhi likha  form mein-->
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">

                    <input name="admin_name" required type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none"> LOGIN </button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['login'])) {

        $frm_data = filteration($_POST);

        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?"; // prepare stmt
    
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $datatype = "ss";

        $res = select($query, $values, $datatype);

        // we recieved data in $res now fetch num_rows if it is equal to 1.
        if (mysqli_num_rows($res) == 1) {

            // fetching the data of that row and storing in variable.
            $row = mysqli_fetch_assoc($res);
            $_SESSION["adminLogin"] = true;
            $_SESSION["adminId"] = $row['sr_no'];
            redirect('dashboard.php');
        } else {
            alert('error', 'Login failed - Invalid Credentials!'); // function in essentials.php
        }
    }

    ?>
    <!-- including scripts -->
    <?php
    require('include/script.php')
        ?>
</body>

</html>