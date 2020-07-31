<?php 


include '../db/dbconnection.php';

if(isset($_POST['submit'])){


    $title = $_POST['title'];
    $text = $_POST['text'];
    $shorttext = $_POST['shorttext'];
    $design = $_POST['design'];
    $product_link = $_POST['product_link'];

    $imagepath = $_FILES['imagepath'] ['name']; //emrin e file prej qatij pathi
    $filetmpname = $_FILES['imagepath']['tmp_name']; //vendodhja momentale

    $finaldestination = 'pictures/'.$imagepath;


    if(move_uploaded_file($filetmpname, $finaldestination)){

        $sql="INSERT INTO blogs (title,imagepath,text,design,product_link,shorttext) values ('$title', '$finaldestination', '$text',$design,'$product_link', '$shorttext');";
        $DB->query($sql);

        header('Location:addblog.php');
    }
    else{
    header('Location:addblog.php?error');
    }
}



























