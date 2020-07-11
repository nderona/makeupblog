<?php 

include 'dbconnection.php';


if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hashedpassword=password_hash($password , PASSWORD_DEFAULT);


    if(empty(trim($name))){
        header("location:../SignUp.php?InvalidForm");
    }
    else if(empty(trim($surname))){
        header("location:../SignUp.php?InvalidForm");
    }
    else if(empty(trim($email))){
        header("location:../SignUp.php?InvalidForm");
    }
    else if(empty(trim($username))){
        header("location:../SignUp.php?InvalidForm");
    }
    else if(empty(trim($password))){
        header("location:../SignUp.php?InvalidForm");
    }
    else{
        $DB = new database();
        $DB->insertUser($name,$surname,$email,$username,$hashedpassword);
    }

}else{
    header("location:../SignUp.php");
}

?>