<?php
    include '../db\dbconnection.php';

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/removeblog.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">
        <?php 
    
    include 'atopMenu.php';
    
    ?>

    <div class="content">

    <?php


        $sql="SELECT * FROM blogs ORDER BY ID desc;";
        $results=$DB->query($sql);

        while($row=mysqli_fetch_assoc($results)){
        ?>

            <div class="post">
            <form action="editBlogdb.php" method="POST" enctype="multipart/form-data">
            <label for="file">TITLE: </label> <br>
            <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>"><br>
            <label for="file">IMAGE: </label> <br>
            <input type="file" id="imagepath" name="imagepath"> <br>
            <img id="image" src="<?php echo $row['imagepath']?>" alt="<?php echo $row['imagepath']?>"><br>
         
            <label for="">DESCRIPTION: </label> <br>
            <textarea name="text" id="text" cols="30" rows="10"> <?php echo $row['text'] ?></textarea><br>
            <label for="file">Design: </label> <br>
            <input type="number" name="design" id="design" value="<?php echo $row['design'] ?>"><br>
            <label for="file">Product linl: </label> <br>
            <input type="text" name="product_link" id="product_link" value="<?php echo $row['product_link'] ?>"><br>

            <input type="submit" name="remove" id="remove" value="Save">
            </form>
             
            </div>
            <?php  } ?>
        </div>
    </div>
</body>

</html>