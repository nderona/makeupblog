<?php 
    include '../db/dbconnection.php';


    if(isset($_POST['remove'])){

        
        $ID = $_POST['ID'];


        

            $sql="DELETE FROM blogs WHERE ID=$ID";
            $DB->query($sql);

            header('Location:removeBlog.php');
        

    }else{
        header('Location:removeBlog.php?error');
    }