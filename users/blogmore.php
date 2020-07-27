<?php

include "../db/dbconnection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/blog.css">
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
        <div>

            <h1><?php echo $row['title']?></h1>

            <img src="<?php echo $row['imagepath']?>" alt="image is here">

            <p><?php echo $row['text']?></p>

            <a href="<?php echo $row['product_link']?>"></a>

        </div>



    
</body>
</html>