<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Star - Rooms</title>

    <!-- including Links -->
    <?php
    require('include/links.php')
        ?>

<body class="bg-light">

    <!-- including Header -->
    <?php
    require('include/header.php')
        ?>

    <!-- Contact us Heading -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Filter section -->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-strech">
                        <h4 class="mt-2">FILTERS</h4>
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

            <div class="col-lg-9 col-md-12 px-4">

                <?php
                $room_res = select("SELECT * FROM `rooms` WHERE `status`=?", [1, 0], 'ii');

                while ($room_data = mysqli_fetch_assoc($room_res)) {

                    // get features of room
                
                }
                ?>




                <!-- Horizontal Cards -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-item-center">
                        <!-- Image -->
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="image\Rooms\2.png" class="img-fluid rounded">
                        </div>
                        <!-- Simple room name column -->
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> 2 Rooms</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Bathroom</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Balcony</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap ">3 Sofa</span>

                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> Wifi</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> Telivision</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> Ac</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap ">Room Heater</span>

                            </div>
                            <div class="guests ">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> 5 Adults</span>
                                <span class="badge rounded-pil bg-light text-dark text-wrap "> 4 Children</span>
                            </div>
                        </div>
                        <!-- Rupees and book column -->
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-2"> ₹ 4000/-</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
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