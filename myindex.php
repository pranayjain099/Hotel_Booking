<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>7Star - Home</title>

  <!-- including Links -->
  <?php
  require('include/links.php')
    ?>

  <!-- Carausol Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body class="bg-light">

  <!-- including Header -->
  <?php
  require('include/header.php')
    ?>

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
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 5 Adults</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 4 Children</span>
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
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 5 Adults</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 4 Children</span>
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
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 5 Adults</span>
              <span class="badge rounded-pil bg-light text-dark text-wrap "> 4 Children</span>
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

  <div class="container mt-5">
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

  <div class="col-lg-12 text-center mt-5">
    <a href="# " class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
  </div>
  <!-- Reach Us -->
  <?php
  $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));
  ?>

  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="360px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-lg-4 col-md-4">
        <!-- Telephone Number -->
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i
              class="bi bi-telephone-plus"></i> +
            <?php echo $contact_r['pn1'] ?>
          </a>
          <br>
          <?php
          if ($contact_r['pn2'] != '') {
            echo <<<data
                <a href="tel: +$contact_r[pn2]"class="d-inline-block text-decoration-none text-dark"><i
                  class="bi bi-telephone-plus"></i> +
                  $contact_r[pn2]
                </a>
                data;
          }
          ?>

        </div>
        <!-- Follow US -->
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <?php
          if ($contact_r['tw'] != '') {
            echo <<<data
                <a href="$contact_r[tw]" class="d-inline-block mb-3"> 
                  <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-twitter me-1"></i>Twitter
                  </span>
                 </a>
                 </br>
                data;
          }
          ?>

          <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>Facebook
            </span>
          </a>
          <br>
          <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i>Instagram
            </span>
          </a>
          <br>




        </div>
      </div>
    </div>

    <!-- including Footer -->
    <?php
    require('include/footer.php')
      ?>

    <!-- Carausol script -->
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
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
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