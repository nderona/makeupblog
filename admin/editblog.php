<?php
    include '../db\dbconnection.php';

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/removeblogs.css">
    <title>Document</title>
</head>

<body>
    <div class="main-container">
        <?php 
    
    include 'atopMenu.php';
    
    ?>
 <div class="container">
            <div class="title">
                <h1> Edit Blog</h1> 
                
            </div>
        </div>
    <div class="content">

    <?php


        $sql="SELECT * FROM blogs ORDER BY ID desc;";
        $results=$DB->query($sql);

        while($row=mysqli_fetch_assoc($results)){
        ?>

            <div class="blog">
            <form action="editBlogdb.php" method="POST" enctype="multipart/form-data">
            <label for="">TITLE: </label> <br>
            <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>"><br>
            <label for="">IMAGE: </label> <br>
            <input type="file" id="imagepath" name="imagepath"> <br>
            <img id="image" src="<?php echo $row['imagepath']?>" alt=""><br>
            <input type="text" value="<?php echo $row['imagepath'] ?>" style="display: none;" name="oldimagepath">
            <input type="number" value="<?php echo $row['ID'] ?>" style="display: none;" name="ID">
            <label for="">SHORT DESCRIPTION: </label> <br>
            <textarea name="shorttext" id="text" cols="30" rows="10"> <?php echo $row['shorttext'] ?></textarea><br>
            <label for="">DESCRIPTION: </label> <br>
            <textarea name="text" id="text" cols="30" rows="10"> <?php echo $row['text'] ?></textarea><br>
            <label for="">Design: </label> <br>
            <input type="number" name="design" class="design<?php echo $row['design'] ?>" value="<?php echo $row['design'] ?>"><br>
            <label for="">Product link: </label> <br>
            <input type="text" name="product_link" id="product_link" value="<?php echo $row['product_link'] ?>"><br>

            <input type="submit" name="remove" id="remove" value="Save">
            </form>
             
            </div>
            <?php  } ?>
        </div>
    </div>
</body>

<?php
    
    include 'afooter.php';
    
    ?>
</html>