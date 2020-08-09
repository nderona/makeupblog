<?php 
    include '../db/dbconnection.php';
    Session_start();

    
    if(isset($_POST['submit'])){

        $user =  $_SESSION['username'];
        $testimony = $_POST['testimony'];
  
        if(empty($user) || empty($testimony)){
            header("location:testimonials.php?InvalidForm");
        }
        else{
            $sql="INSERT INTO testimonials (user,text) values ('$user', '$testimony');";
            $DB->query($sql);
            header("location:testimonials.php?Super");
        }       
      
    }
    else{
        header('Location:testimonials.php?error');
    }
    


?>

    
 
   
