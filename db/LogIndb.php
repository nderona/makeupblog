<?php


Session_start();
require "dbconnection.php";

    if (isset($_POST['submit'])) {
        //Preventing SQL injections
        $username = $DB->real_escape_string($_POST['username']);
        $password = $DB->real_escape_string($_POST['password']);

        if (empty(trim($username))) {
            header('Location:..\LogIn.php');
        } else if (empty(trim($password))) {
                header('Location:..\LogIn.php');
        } else{

                $sql = "SELECT * FROM users WHERE username = '$username';";
                $results = $DB->query($sql);
                $number = mysqli_num_rows($results);


                if ($number == 1) {
                    $row = mysqli_fetch_array($results);
                    // $row llogaritet sikur celes per me verifiku password-in e dhene me ate te ruajtur ne db
                    //password verify verifikon se passwordi i dhene a perdoret si celes per hashed passwordin
                    if (password_verify("$password", $row['password'])) {

                        //krijimi nje sesioni dhe marrja nga databaza qe te identifikohet current loged in user
                        $_SESSION['ID'] = $row['ID'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['surname'] = $row['surname'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['username'] = $row['username']; 
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['admin'] = $row['admin'];

                        if($_SESSION['admin'] == '1'){
                            header("location:../admin/home.php");
                        }else{
                            header("location:../users/blog.php");  
                       
                        }

                        
                    } else {
                        header("location:..\LogIn.php?pwincorrect");
                    }
                } else {
                    header("location:..\LogIn.php");
                }

            }

    } else{
        header('Location:..\LogIn.php');
    }
        
?>