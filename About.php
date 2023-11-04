<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Star -About Us</title>

    <!-- including Links -->
    <?php
    require('include/links.php')
        ?>

    <style>
        .box {
            border-top-color: var(--teal) !important;
        }
    </style>

<body class="bg-light">

    <!-- including Header -->
    <?php
    require('include/header.php')
        ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">About Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos saepe
            inventore possimus suscipit laudantium commodi cum, delectus rem.<br> Laudantium accusamus tempora ut
            blanditiis id rem quisquam repellendus nostrum asperiores?</p>
    </div>


    <div class="container">
        <div class="row align-item-center justify-content-between">
            <!-- In Large and small devices mein content pehle then img so order changed but in mobile we want image first. -->
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem ipsum dolor sit amet.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia laudantium et perferendis, ipsa
                    aspernatur corrupti ab magnam vitae praesentium reprehenderit! Rerum saepe cupiditate ipsum?
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="image\about\1.jpg" class="w-100">
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">100+ Rooms</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">200+ Rooms</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">300+ Staffs</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">150+ Reviews</h5>
                </div>
            </div>
        </div>
    </div>


    <!-- including Footer -->
    <?php
    require('include/footer.php')
        ?>
</body>

</html>