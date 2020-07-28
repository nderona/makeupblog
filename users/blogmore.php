<?php

include "../db/dbconnection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blogmore.css">
    <title>Document</title>
</head>
<body>
        <?php
            include "utopMenu.php";
        ?>
    <?php 
    
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM blogs WHERE ID = $ID";
        $result = $DB->query($sql);
        $row = mysqli_fetch_array($result);
        
    ?>
        <div class="center">
            <div class="more">
                <h1><?php echo $row['title']?></h1>

                <img id="img" src="../<?php echo $row['imagepath']?>" alt="image is here">

                <p id="p"><?php echo $row['text']?></p>

                <a id="a" target="_blank" href="<?php echo $row['product_link']?>">Buy Product</a>
                <a id="goback" href="blog.php">< Go Back</a>
            </div>
            
        


    
</body>
</html>