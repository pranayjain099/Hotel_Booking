<!-- Including db_config and essentials -->
<?php
require('include\db_config.php');
require('include\essentials.php');
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
    // agar post method se koi data submit hua hai and usme login naam ka index hai , then first filter the data 
    if (isset($_POST['login'])) {
        // we are calling the filteration function and passing parameter as POST only because post ke ander ka data array type he hota hai.
    
        $frm_data = filteration($_POST); //and recieved data is stored in new varibale.
    

        // Table name or column names are written in backtick (` `) and values are written in single quote (' ').
    
        // what is "?" = we are going to use prepared statement here
        $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";

        // contains adminname and passowrd
        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        // datatype of values 
        $datatype = "ss"; // ss means string(for admin name) string (for admin password).
    
        //calling the function
        $res = select($query, $values, $datatype);

        // we recieved data in $res now fetch num_rows if it is equal to 1.
        if ($res->num_rows == 1) {

            // fetching the data of that row and storing in variable.
            $row = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION["adminlogin"] = true;
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