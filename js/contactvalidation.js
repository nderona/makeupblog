const fname = document.getElementById('fname');
const email = document.getElementById('emailc');
const subject = document.getElementById('subject');

function validate(){
    if(fname.value.trim() === '' || fname.value == null){
        fname.style = "border: 2px solid red;";
        fname.placeholder = "Please enter your Full Name";
        return false;
    }
    if(email.value.trim() === '' || email.value == null){
        lname.style = "border: 2px solid red;";
        lname.placeholder = "Please enter your Email";
        return false;
    }
    if(subject.value.trim() === '' || subject.value == null){
        subject.style = "border: 2px solid red;";
        subject.placeholder = "Please write something";
        return false;
    }
    

    return true;
}