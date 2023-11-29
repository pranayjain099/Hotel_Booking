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
    <title>Settings</title>
    <?php
    require('include/links.php');
    ?>
</head>

<body class="bg-light">

    <?php require('include/header.php') ?>

    <!-- Main content  -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
                <!-- General Settings Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>
                <!-- General settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_input"
                                            class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">About us</label>
                                        <textarea name="site_about" id="site_about_input"
                                            class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>

                                <!-- When we click on edit and change the site tile and about but we changed and do cancel then data gets saved but we dont want this so here we put onlick and waha ki value ko databse mein jo hai whi set krdi -->
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title ,
                                        site_about.value = general_data.site_about"
                                        class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <!-- Shutdown section (Site down krna ki koi booking na kar paye)-->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <!-- This is switch taken from bootstrap -->
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="update_shutdown(this.value)" class="form-check-input"
                                        type="checkbox" id="shutdown-toggle">
                                </form>
                            </div>
                        </div>
                        <p class="card-text">No customers will be allowed to book hotel room , when shutdown mode is
                            turned on</p>
                    </div>
                </div>

                <!-- Contact Detail Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Contact Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal"
                                data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <!-- Contact setting column -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <!-- Social Link column -->
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <div class="mb-4">
                                        <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                                        <p class="card-text mb-1">
                                            <i class="bi bi-facebook me-1"></i>
                                            <span id="fb"></span>
                                        </p>
                                        <p class="card-text">
                                            <i class="bi bi-instagram me-1"></i>
                                            <span id="insta"></span>
                                        </p>
                                        <p class="card-text">
                                            <i class="bi bi-twitter me-1"></i>
                                            <span id="tw"></span>
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                                            <iframe id="iframe" class="border p-2 w-100" lodaing="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        require('include/script.php');
        ?>

        <script>

            // we will store data of general setting modal
            let general_data, contacts_data;

            let site_title_input = document.getElementById('site_title_input');
            let site_about_input = document.getElementById('site_about_input');

            let general_s_form = document.getElementById('general_s_form');

            general_s_form.addEventListener('submit', function (e) {
                e.preventDefault(); // Will avoid page from refresh means will avoid form to submit.
                update_general(site_title_input.value, site_about_input.value)

            })


            function get_general() {
                let site_title = document.getElementById('site_title');
                let site_about = document.getElementById('site_about');

                let shutdown_toggle = document.getElementById('shutdown-toggle')

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');  // we have to apply this header when we send data thorugh post.

                // data recieved here now 

                // xhr.onreadystatechange = function{
                //     if(this.readyState==4 && this.status==200){

                //     }
                // }
                // you can write like this but to write this in short there is a way

                xhr.onload = function () {
                    // JSON.parse converts json data into js object.
                    general_data = JSON.parse(this.responseText);

                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    site_title_input.value = general_data.site_title;
                    site_about_input.value = general_data.site_about;

                    // It means site is up.
                    // we will recieve 3 data in general_data site_tite,site_about and shutdown and shutdown is boolean so its either 0 or 1.
                    // 1 means site is down
                    if (general_data.shutdown == 0) {
                        shutdown_toggle.checked = false;
                        shutdown_toggle.value = 0;
                    } else {
                        shutdown_toggle.checked = true;
                        shutdown_toggle.value = 1;
                    }
                }
                xhr.send('get_general');
            }



            function update_general(site_title_val, site_about_val) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {

                    var myModal = document.getElementById('general-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();

                    // updating without reloading
                    if (this.responseText == 1) {
                        alert('success', 'Changes saved!');
                        get_general();
                    } else {
                        alert('error', 'No Changes saved!');
                    }



                }
                xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&update_general');
            }

            function update_shutdown(val) {
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {

                    if (this.responseText == 1 && general_data.shutdown == 0) {
                        alert('success', 'Site has been shutdown');
                    } else {
                        alert('success', 'Shutdown mode off !');
                    }
                    get_general();


                }
                xhr.send('update_shutdown=' + val);
            }

            function get_contacts() {

                // on]ption one either create 8 9 variable jitne table mein hai then doc.getelemntbyid kro else create a array.
                // storing ids of all the tags 
                let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
                let iframe = document.getElementById('iframe');

                let xhr = new XMLHttpRequest();
                xhr.open("POST", "ajax/settings_crud.php", true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onload = function () {
                    contacts_data = JSON.parse(this.responseText);
                    console.log(contacts_data);
                }
                xhr.send('get_contacts');
            }

            // when we load window then this function will be called
            window.onload = function () {
                get_general();
                get_contacts();
            }
        </script>
</body>

</html>