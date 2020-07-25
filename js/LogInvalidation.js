const username = document.getElementById('username');
const password = document.getElementById('password');

function validate() {
    if (username.value.trim() === '' || username.value == null) {
        username.style = "border: 2px solid red;";
        username.placeholder = "Invalid Username";
        return false;
    }
    if (password.value.trim() === '' || password.value == null || password.value.length < 6) {
        password.style = "border: 4px solid red;";
        password.value = "";
        password.placeholder = "Invalid Password";
        return false;
    }


    return true;
}