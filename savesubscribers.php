<?php

include 'db/dbconnection.php';

if(isset($_POST['submit'])){

    $email =$DB->real_escape_string($_POST['email']);

    if(empty($email)){
        header("location:index.php");
    }

    $sql = "INSERT INTO subscribers (email) values ('$email');";
    $DB->query($sql);
    
    header("location:index.php");
}

?>