<?php
    Session_start();
include 'dbconnection.php';

    $username=$_POST['username'];
    $password=$_POST['password'];


    if(isset($_POST['submit'])){

        if(empty(trim($username))){
            header("location:../LogIn.php?UsernameInvalid");
        }
        else if(empty(trim($password))){
            header("location:../LogIn.php?IncorrectPassword");
        }else{

            $DB = new database();
            $user=$DB->getUser($username, $password);

            if($user==null){
                header("location:../LogIn.php?UsernameNotFound");
            }else{

                $_SESSION['name']=$user['name'];
                $_SESSION['surname']=$user['surname'];
                $_SESSION['email']=$user['email'];
                $_SESSION['username']=$user['username'];

                header("location:../users/homePage.php?Welcome");  
            }
            
        }
    }else{
        header("location:../LogIn.php?NotWorkiiing");  
    }

?>