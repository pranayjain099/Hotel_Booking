<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>7Star</title>

  <!-- Bootsrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- fonts link -->
  <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@300;400;600&display=swap"
    rel="stylesheet">

  <!-- icon link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Carausol Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="css/common.css">
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 ms-4 fw-bold fs-3 h-font" href="myindex.php">7Star</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2 " aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About Us</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow me-lg-3 me-2" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration

            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pil bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match
              with your ID(Aadhar Card, Passport , Driving Liscense etc) that will be required during check-in</span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Photo</label>
                  <input type="file" class="form-control shadow-none">
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label">Address</label>
                  <textarea class="form-control shadow-none" rows="1"></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Pincode</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Date of Birth</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow-none"> REGISTER </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-circle fs-3 me-2"></i>User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-4">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none"> LOGIN </button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Carausel -->
  <div class="container-fluid px-lg-4 mt-4">

    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="image\Slider\1.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image\Slider\2.jpg" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image\Slider\3.jpg" class="w-100 d-block" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check availability form -->

  <div class="conatiner ms-5">
    <div class="row">
      <div class="col-lg-11 bg-white shadow p-4 m-4 rounded">
        <h5 class="mb-4"> Check Booking Availability </h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-4">

              <label class="form-label" style="font-weight : 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">

            </div>
            <div class="col-lg-3 mb-4">

              <label class="form-label" style="font-weight : 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">

            </div>
            <div class="col-lg-2 mb-4">

              <label class="form-label" style="font-weight : 500;">Adult</label>
              <select class="form-select shadow-none">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

            </div>
            <div class="col-lg-2 mb-4">

              <label class="form-label" style="font-weight : 500;">Children</label>
              <select class="form-select shadow-none">

                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 ms-lg-5 mb-4">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our Rooms -->

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-6 mb-4">
        <div class="card border-none shadow" style="max-width: 20rem; margin:auto;">
          <img src="image\Rooms\1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Premium Room</h5>
            <h6 class="mb-4"> ₹ 4000/-</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 2 Rooms</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Bathroom</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Balcony</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">3 Sofa</span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Wifi</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Telivision</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Ac</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">Room Heater</span>

            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pil bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>


            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-6 mb-4">
        <div class="card border-none shadow" style="max-width: 20rem; margin:auto;">
          <img src="image\Rooms\1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Premium Room</h5>
            <h6 class="mb-4"> ₹ 4000/-</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 2 Rooms</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Bathroom</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Balcony</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">3 Sofa</span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Wifi</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Telivision</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Ac</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">Room Heater</span>

            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pil bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>


            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-6 mb-4">
        <div class="card border-none shadow" style="max-width: 20rem; margin:auto;">
          <img src="image\Rooms\1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Premium Room</h5>
            <h6 class="mb-4"> ₹ 4000/-</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 2 Rooms</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Bathroom</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 1 Balcony</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">3 Sofa</span>

            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Wifi</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Telivision</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> Ac</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap ">Room Heater</span>

            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pil bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>


            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="# " class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

  <!-- Our Facilities -->

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image\Features\1.png" width="100px">
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image\Features\1.png" width="100px">
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image\Features\1.png" width="100px">
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image\Features\1.png" width="100px">
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image\Features\1.png" width="100px">
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="# " class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="image/Rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut asperiores rerum quisquam a autem alias in
            dicta
            dolorem, vel architecto, enim libero consequuntur adipisci laborum, labore consectetur unde nesciunt nobis
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="image/Rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut asperiores rerum quisquam a autem alias in
            dicta
            dolorem, vel architecto, enim libero consequuntur adipisci laborum, labore consectetur unde nesciunt nobis
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white mb-3">
          <div class="profile d-flex align-items-center p-4">
            <img src="image/Rooms/1.jpg" width="30px">
            <h6 class="m-0 ms-2">Random User1</h6>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut asperiores rerum quisquam a autem alias in
            dicta
            dolorem, vel architecto, enim libero consequuntur adipisci laborum, labore consectetur unde nesciunt nobis
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>


      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: "true",
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
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
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
</body>

</html>