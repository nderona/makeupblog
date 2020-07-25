const name = document.getElementById('name');
const surname = document.getElementById('surname');
const email = document.getElementById('email');
const username = document.getElementById('username');
const password = document.getElementById('password');



    function validate(){
    if(name.value.trim() === '' || name.value == null){
        name.style = "border: 2px solid red;";
        name.placeholder = "Please enter a valid Name";
        return false;
    }
     if(surname.value.trim() === '' || surname.value == null){
        surname.style = "border: 2px solid red;";
        surname.placeholder = "Please enter a valid Surname";
        return false;
    }
     if(email.value.trim() === '' || email.value == null){
        email.style = "border: 2px solid red;";
        email.placeholder = "Please enter a valid Email";
        return false;
    }
    if(username.value.trim() === '' || username.value == null){
        username.style = "border: 2px solid red;";
        username.placeholder = "Please enter a valid Username";
        return false;
    }
     if(password.value.trim() === '' || password.value == null || password.value.length < 6){
        password.style = "border: 4px solid red;";
        password.value = "";
        password.placeholder = "Password empty or less than 6 charachters";
        return false;
    }
    

    return true;
}