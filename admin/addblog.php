<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addblog.css">
    <title>Document</title>
</head>
<body>
<div class="main-container">
    <?php 
    
    include 'atopMenu.php';
    
    ?>
        <div class="content">
            
            <form action="addblogdb.php" method="POST" enctype="multipart/form-data">
            <label for="">TITLE: </label> <br>
            <input type="text" id="title" name="title">
            <label for="">Image: </label> <br>
            <input type="file" id="imagepath" name="imagepath">
            <label for="">DESCRIPTION: </label> <br>
            <textarea  id="text" name="text" cols="30" rows="10"></textarea>
            <label for="">DESIGN: </label> <br>
            <input type="number" id="design" name="design">
            <label for="">Product Link: </label> <br>
            <input type="text" id="product_link" name="product_link">

            <input type="submit" name="submit" id="submit">
         </form>
         </div>
        </div>
</div>
</body>
</html>