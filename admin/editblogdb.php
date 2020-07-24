<?php 
    include '../db\dbconnection.php';


    if(isset($_POST['remove'])){

        $ID = $_POST['ID'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $design = $_POST['design'];
        $product_link = $_POST['product_link'];
    
        $imagepath = $_FILES['imagepath'] ['name'];
        $filetmpname = $_FILES['imagepath']['tmp_name'];
    
        $finaldestination = 'pictures/'.$imagepath;
    
        

            $sql="UPDATE blogs SET title ='$title', imagepath = '$finaldestination', text = '$text' ,design='$design', product_link ='$product_link' WHERE ID = $ID;";
            $DB->query($sql);

            header('Location:editBlog.php');
        

    }else{
        header('Location:editBlog.php?error');
    }
    