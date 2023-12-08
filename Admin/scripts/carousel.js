
let carousel_s_form = document.getElementById('carousel_s_form');
let member_name_input = document.getElementById('member_name_input');
let member_picture_input = document.getElementById('member_picture_input');


// Management Team section
carousel_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_member();
});

// Add member  
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

// Get  member
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
