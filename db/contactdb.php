<?php

include 'dbconnection.php';


if(isset($_POST['submit'])){

    $firstname =$_POST['firstname'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];


    if(empty($firstname) || empty($email) || empty($subject)  ){

     header("location:../contact.php?InvalidForm");

    }

    else{

        $sql = "INSERT INTO contact (name,email,subject) VALUES ('$firstname','$email','$subject');";
        $DB->query($sql);
        header("location:../thankyoucontact.php");
    }






}


?>

