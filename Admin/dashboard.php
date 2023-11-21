<?php
require('include/essentials.php');
adminLogin();
session_regenerate_id(true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <?php
    require('include/links.php');
    ?>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0 h-font">7 Star</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <!-- Slidebar -->
    <div class="col-lg-2 bg-dark border-top border-3 border-secondary">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-strech">
                <h4 class=mt-2>FILTERS</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#filterDropDown" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2 " id="filterDropDown">
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none mb-3">
                        <label class="form-label">Check-in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                        <div class="mb-2">

                            <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f1">Facility-one</label>
                        </div>
                        <div class="mb-2">

                            <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f2">Facility-Two</label>
                        </div>
                        <div class="mb-2">

                            <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                            <label class="form-check-label" for="f3">Facility-Three</label>
                        </div>
                    </div>
                    <div class="border bg-light p-3 rounded mb-3">
                        <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                        <div class="d-flex">
                            <div class="me-3">
                                <label class="form-label">Adults</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div>
                                <label class="form-label">Childrens</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

    </div>
    <?php
    require('include/script.php');
    ?>
</body>

</html>