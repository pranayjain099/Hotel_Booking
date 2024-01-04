
// we will store data of general setting modal
let general_data, contacts_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_input = document.getElementById('site_title_input');
let site_about_input = document.getElementById('site_about_input');
let contacts_s_form = document.getElementById('contacts_s_form');

// management team ids
let team_s_form = document.getElementById('team_s_form');
let member_name_input = document.getElementById('member_name_input');
let member_picture_input = document.getElementById('member_picture_input');

general_s_form.addEventListener('submit', function (e) {
    e.preventDefault(); // Will avoid page from refresh means will avoid form to submit.
    update_general(site_title_input.value, site_about_input.value)

})


// Get General = will fetch data from database and update the page
function get_general() {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');

    let shutdown_toggle = document.getElementById('shutdown-toggle')

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');  // we have to apply this header when we send data thorugh post.

    // data recieved here froms get_general (settings_crud (Ajax))

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

// Update General = will send data to database and update the database with new data 
function update_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        // to hide modal
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

// Update shutdown
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

// Get contacts
function get_contacts() {

    // one option is either create 8 9 variable jitne table mein hai then doc.getelemntbyid kro else create a array.
    // storing ids of all the tags 
    let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        contacts_data = JSON.parse(this.responseText);
        contacts_data = Object.values(contacts_data);

        for (i = 0; i < contacts_p_id.length; i++) {
            document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
        }
        iframe.src = contacts_data[9];
        contacts_input(contacts_data);

    }
    xhr.send('get_contacts');
}

// Contact inputs
function contacts_input(data) {
    let contacts_input_id = ['address_input', 'gmap_input', 'pn1_input', 'pn2_input', 'email_input', 'fb_input', 'insta_input', 'tw_input', 'iframe_input'];

    for (i = 0; i < contacts_input_id.length; i++) {
        document.getElementById(contacts_input_id[i]).value = data[i + 1];
    }
}

contacts_s_form.addEventListener('submit', function (e) {
    e.preventDefault(); // prevents default behaviour of page jo ki hai page ka refresh hona and submit ho jana.
    update_contacts();
})

// Update contacts
function update_contacts() {
    let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
    let contacts_input_id = ['address_input', 'gmap_input', 'pn1_input', 'pn2_input', 'email_input', 'fb_input', 'insta_input', 'tw_input', 'iframe_input'];

    let data_str = "";

    for (i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contacts_input_id[i]).value + '&';
    }
    data_str += "update_contacts";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if (this.responseText == 1) {
            alert('success', 'Changes Saved');
            get_contacts();
        } else {
            alert('error', 'No changes');
        }


    }
    xhr.send(data_str);
}

// Management Team section
team_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_member();
});

// Add member in Management Team 
function add_member() {

    let data = new FormData();
    data.append('name', member_name_input.value);
    data.append('picture', member_picture_input.files[0]);
    data.append('add_member', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);

    xhr.onload = function () {


        // to hide modal
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 'inv_img') {
            alert('error', 'only JPG and PNG Images are allowed');
            get_general();
        } else if (this.responseText == 'inv_size') {
            alert('error', 'Image shouldbe less than 2MB JPG and PNG images are allowed');
        } else if (this.responseText == 'update_failed') {
            alert('error', 'Image upload failed , Server down ');
        } else {
            alert('success', 'New member added');
            member_name_input.value = '';
            member_picture_input.value = '';
            get_members();
        }
    }

    xhr.send(data);

}

// Get Management Team member
function get_members() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('team-data').innerHTML = this.responseText;
    }
    xhr.send('get_members');
}

function rem_member(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (this.responseText == 1) {
            alert('success', 'Member removed!');
            get_members();
        } else {
            alert('error', 'Server Down! ');
        }
    }
    xhr.send('rem_member=' + val);
}
// when we load window then this function will be called
window.onload = function () {
    get_general();
    get_contacts();
    get_members();
}
