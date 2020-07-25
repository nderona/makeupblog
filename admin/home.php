<?php
    include '../db/dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../users/css/Blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-container">
        <?php
         include 'atopMenu.php';?>

    
        <div class="content">

                <?php
            
            
            $sql="SELECT * FROM blogs ORDER BY ID desc;";
            $results=$DB->query($sql);
            
            while($row=mysqli_fetch_assoc($results)){
                ?>
                <div class="blog<?php echo $row['design']?>">
                <div class="design<?php echo $row['design']?>" >
                    <div id="title<?php echo $row['design']?>">
                        <h1><?php echo $row['title'];?></h1>
                    </div>
                    <div id="image<?php echo $row['design']?>"><img class="image<?php echo $row['design']?>" src="../<?php echo $row['imagepath'];?>" alt=""></div>
                    <div id="text<?php echo $row['design']?>">
                        <p><?php echo $row['text'];?> </p>
                    </div>
                    <div id="product_link<?php echo $row['design']?>">
                        <p><?php echo $row['product_link'];?> </p>
                    </div>
                    <button id="button<?php echo $row['design']?>">read more</button>
                </div>
                <?php  } ?>
                </div>
            </div>
  

    </div>

</body>

</html>
