<?php
require('include/essentials.php');
require('include/db_config.php');
adminLogin();
session_regenerate_id(true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Queries</title>
    <?php
    require('include/links.php');
    ?>
</head>

<body class="bg-light">

    <?php require('include/header.php') ?>

    <!-- Main content  -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 pt-0 overflow-hidden">
                <h3 class="mb-4">User QueriesL</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('include/script.php'); ?>


</body>

</html>