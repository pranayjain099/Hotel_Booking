<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Star - Contact</title>

    <!-- including Links -->
    <?php
    require('include/links.php')
        ?>

<body class="bg-light">

    <!-- including Header -->
    <?php
    require('include/header.php')
        ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos saepe
            inventore possimus suscipit laudantium commodi cum, delectus rem.<br> Laudantium accusamus tempora ut
            blanditiis id rem quisquam repellendus nostrum asperiores?</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 mb-5 px-4">
                <div class="bg-white rounded p-4 shadow">
                    <iframe class="w-100 rounded mb-4" height="360px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121059.0344739699!2d73.86296739999999!3d18.52461645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1699056721499!5m2!1sen!2sin"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/aFf1CLBLz7qp7z9m6" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>
                        Kothrud,Pune
                        , Maharashtra</a>
                    <h5>Call Us</h5>
                    <a href="tel:+9179980090" class="d-inline-block mb-2 text-decoration-none text-dark"><i
                            class="bi bi-telephone-plus"></i> +9179980090</a>
                    <br>
                    <a href="tel:+9179980090" class="d-inline-block text-decoration-none text-dark"><i
                            class="bi bi-telephone-plus"></i> +9179980090</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4  px-4">
                <div class="bg-white rounded p-4 shadow border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="image\Features\1.png" width="40px">
                        <h5 class="m-0 ms-3">WIFI</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos
                        saepe inventore possimus suscipit laudantium commodi cum, delectus rem</p>
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