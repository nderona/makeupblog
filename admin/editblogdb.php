<?php 
    include '../db/dbconnection.php';


    if(isset($_POST['remove'])){

        $ID = $_POST['ID'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $shorttext = $_POST['shorttext'];
        $design = $_POST['design'];
        $product_link = $_POST['product_link'];
    
        $imagepath = $_FILES['imagepath'] ['name'];
        $finaldestination = 'pictures/'.$imagepath;
    
        if(empty($imagepath)){
            $finaldestination = $_POST['oldimagepath'];
        }

        $sql="UPDATE blogs SET title ='$title', imagepath = '$finaldestination', text = '$text' ,design=$design, product_link ='$product_link', shorttext='$shorttext' WHERE ID = $ID;";
        $DB->query($sql);

        header('Location:editBlog.php?super');
        

    }else{
        header('Location:editBlog.php?error');
    }
    
?>