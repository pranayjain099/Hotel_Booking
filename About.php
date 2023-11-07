<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Star -About</title>

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
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">100+ Rooms</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">200+ Rooms</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">300+ Staffs</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="image\Rooms\1.jpg" width="200px">
                    <h5 class="m-0 mt-3">150+ Reviews</h5>
                </div>
            </div>
        </div>
    </div>


    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper aboutSwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="image\Rooms\1.jpg" class="w-100">
                    <h5 class="mt2">Random</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".aboutSwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {   // for 320 px devices
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
    <!-- including Footer -->
    <?php
    require('include/footer.php')
        ?>
</body>

</html>