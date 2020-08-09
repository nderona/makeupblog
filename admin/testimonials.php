<?php
    include '../db\dbconnection.php';

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../users/css/testimonials.css">
    <title>Remove Testimonials</title>
</head>

<body>
    <div class="main-container">
        <?php 
    
    include 'atopMenu.php';
    
    ?>
     <div class="container">
            <div class="title">
                <h1> Remove Testimonial</h1> 
                
            </div>
        </div>

        <div class="content">
    
    <?php
    
    
    $sql="SELECT * FROM testimonials ORDER BY ID desc;";
    $results=$DB->query($sql);
    
    while($row=mysqli_fetch_assoc($results)){
       
        ?>
      <section class="quotescontent">
        <div class="quotes">
        <div class="bubble">
        <blockquote>"<?php echo $row['text'];?>"</blockquote>
        <div class="triangle"></div>
        <cite><?php echo $row['user'];?></cite>
        <a id="remove" href="atestimonials.php?ID=<?php echo $row['ID']?>">Remove</a>
        </div>
   
        </div>
        <?php  } ?>
        
    </section>
</div>
    
    <?php
    
    include 'afooter.php';
    
    ?>
</body>

</html>