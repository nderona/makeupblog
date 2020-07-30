<?php 
    include '../db/dbconnection.php';
    Session_start();

    
    if(isset($_POST['submit'])){

        $ID =  $_SESSION['ID'];
        $password =  $_SESSION['password'];
        $oldpassword = $_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        
            
            if (password_verify($oldpassword, $password)) {

                $hashednewpw = password_hash($newpassword, PASSWORD_DEFAULT);
                $sql = "UPDATE users SET password= '$hashednewpw' WHERE ID= $ID;";
                $DB->query($sql);

                $_SESSION['password'] =  $hashednewpw;

                header('Location:Profile.php?SuccessfullyUpdated');

            }else{
                header('Location:Profile.php?jashte');
            }

            
      
    }
    else{
        header('Location:Profile.php?not');
    }
    


?>

    
 
   
