<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addblogs.css">
    <title>Document</title>
</head>
<body>
<div class="main-container">
    <?php 
    
    include 'atopMenu.php';
    
    ?>
     <div class="container">
            <div class="title">
                <h1> Add Blog</h1> 
                
            </div>
        </div>
        <div class="content">
            
            <form action="addblogdb.php" method="POST" enctype="multipart/form-data">
            <label for="">TITLE: </label> <br>
            <input type="text" id="title" name="title" required>
            <label for="">Image: </label> <br>
            <input type="file" id="imagepath" name="imagepath" required>
            <label for="">SHORT DESCRIPTION: </label> <br>
            <textarea  id="text" name="shorttext" cols="30" rows="10" required></textarea>
            <label for="">DESCRIPTION: </label> <br>
            <textarea  id="text" name="text" cols="30" rows="10" required></textarea>
            <label for="">DESIGN: </label> <br>
            <input type="number" id="design" name="design" required>
            <label for="">Product Link: </label> <br>
            <input type="text" id="product_link" name="product_link" required>

            <input type="submit" name="submit" id="submit">
         </form>
         </div>
        </div>
</div>
<?php
    
    include 'afooter.php';
    
    ?>

</body>
</html>