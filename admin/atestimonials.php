<?php 
    include '../db/dbconnection.php';


    if(isset($_GET['ID'])){

        
        $ID = $_GET['ID'];


        

            $sql="DELETE FROM testimonials WHERE ID=$ID";
            $DB->query($sql);

            header('Location:testimonials.php');
        

    }else{
        header('Location:testimonials.php');
    }