<?php 

    require "dbconnection.php";

    if(isset($_POST['submit'])){
        //Preventing SQL injections
        $name = $DB->real_escape_string($_POST['name']);
        $surname = $DB->real_escape_string ($_POST['surname']);
        $email = $DB->real_escape_string ($_POST['email']);
        $username = $DB->real_escape_string($_POST['username']);
        $password = $DB->real_escape_string($_POST['password']);
        $hashedpw = password_hash($password, PASSWORD_DEFAULT);

        if(empty(trim($name))){
            header('Location:..\SignUp.php');
        }else if(empty(trim($surname))){
            header('Location:..\SignUp.php');
        }
        else if(empty(trim($email))){
            header('Location:..\SignUp.php');
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header('Location:..\SignUp.php');
        }
        else if(empty(trim($username))){
            header('Location:..\SignUp.php');
        }
        else if(empty(trim($password))){
            header('Location:..\SignUp.php');
        }else{

            $selectusername= "SELECT * FROM users WHERE username='$username';";
            $results= $DB->query($selectusername);
            $number= mysqli_num_rows($results);
            if(number == 1){
                header('Location:..\SignUp.php');
            }
            else{


            $sql = " INSERT INTO users (name, surname, email, username, password, admin) VALUES ('$name', '$surname', '$email', '$username', '$hashedpw', 'user')";

        $DB->query($sql);

        header('Location:..\ThankYouPage.php');
        }

    }



        
    
        
    }






?>
 