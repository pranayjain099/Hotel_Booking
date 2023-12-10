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

    <!-- Contact us Heading -->
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quos saepe
            inventore possimus suscipit laudantium commodi cum, delectus rem.<br> Laudantium accusamus tempora ut
            blanditiis id rem quisquam repellendus nostrum asperiores?</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Left section (maps) -->
            <div class="col-lg-6 col-md-4 mb-5 px-4">
                <div class="bg-white rounded p-4 shadow">
                    <!-- Google maps -->
                    <iframe class="w-100 rounded mb-4" height="360px" src="<?php echo $contact_r['iframe'] ?>"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- address -->
                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap'] ?>" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2"><i class="bi bi-geo-alt-fill"></i>
                        <?php echo $contact_r['address'] ?>
                    </a>
                    <!-- Contact -->
                    <h5 class="mt-4">Call Us</h5>
                    <a href="tel:+<?php echo $contact_r['pn1'] ?>"
                        class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-plus"></i>
                        +
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
                    <!-- Email -->
                    <h5 class="mt-4 ">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email'] ?>"
                        class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>
                        <?php echo $contact_r['email'] ?>
                    </a>

                    <!-- Follow us -->
                    <h5 class=mt-4>Follow Us</h5>
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
            <!-- Right section -->
            <div class="col-lg-6 col-md-4  px-4">
                <div class="bg-white rounded p-4 shadow">
                    <form method="post">
                        <!-- Send a message  -->
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:550;">Name
                            </label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:550;">Email
                            </label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:550;">Subject
                            </label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:550;">Message
                            </label>
                            <textarea name="message" required class="form-control shadow-none" rows="3"
                                style="resize:none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-white custom-bg mt-3"> Send </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['send'])) {
        $frm_data = filteration($_POST);
        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

        $res = insert($q, $values, 'ssss');
        if ($res == 1) {
            alert('success', 'Mail sent!');
        } else {
            alert('error', 'Server Down! Try again later.');
        }

    }
    ?>
    <!-- including Footer -->
    <?php
    require('include/footer.php')
        ?>
</body>

</html>