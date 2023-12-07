<!-- Footer also contains all the scripts -->
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <div class="h-font fw-bold fs-3 mb-2">7Star</div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum amet blanditiis voluptatibus dolorum id
                nobis aut molestiae quas! Officia provident repellendus sapiente quod, maiores aliquid corrupti aperiam
                porro voluptatibus doloribus.</p>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="myindex.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
            <a href="Rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="Facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
            <a href="Contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
            <a href="About.php" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a>
        </div>
        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Follow Us</h5>
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

            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-3">
                <i class="bi bi-facebook me-1"></i>Facebook
            </a>
            <br>
            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none mb-3">
                <i class="bi bi-instagram me-1"></i>Instagram
            </a>
            <br>
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Pranay Jain</h6>


<!-- Bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Swiper js script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>