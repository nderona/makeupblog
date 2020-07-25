<?php 
    include '../db/dbconnection.php';
    Session_start();

    
    if(isset($_POST['submit'])){

        $ID =  $_SESSION['ID'];
        $name =$DB->real_escape_string($_POST['name']); 
        $surname = $DB->real_escape_string($_POST['surname']);
        $email = $DB->real_escape_string($_POST['email']);
       
        
        if (empty(trim($name))) {
            header('Location:Profile.php');
        } else if (empty(trim($surname))) {
                header('Location:Profile.php');
        } else if(empty(trim($email))) {
            header('Location:Profile.php');
        }else{


       $edit= "UPDATE users SET name='$name', surname ='$surname', email ='$email' WHERE ID = $ID;";
       $DB->query($edit);

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['email'] = $email;  
        
            
            if (password_verify("$oldpassword",  $_SESSION['password'])) {

                $hashednewpw = password_hash($newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET Password= '$hashednewpw' WHERE ID= $ID;";


            }

       header('Location:Profile.php?SuccessfullyUpdated');
    }
}
 
    else{
        header('Location:Profile.php?not');
    }
    


?>

    
 
   




             