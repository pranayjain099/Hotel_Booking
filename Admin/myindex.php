<!-- Including db_config -->
<?php
require('/include/db_config.php');
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
        <form>
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-4">
                <div class="mb-3">

                    <input name="admin_name" type="text" class="form-control shadow-none text-center"
                        placeholder="Admin Name">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" type="password" class="form-control shadow-none text-center"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn text-white custom-bg shadow-none"> LOGIN </button>
            </div>
        </form>
    </div>

    <!-- including scripts -->
    <?php
    require('include/script.php')
        ?>
</body>

</html>