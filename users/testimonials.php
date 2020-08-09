<?php
    include '../db/dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <link rel="stylesheet" href="css/testimonials.css">
</head>

<body>
    <div class="main-container">
        <?php
         include 'utopMenu.php';?>

<h1> Testimonials </h1>
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
                </div>
                </div>
                <?php  } ?>
            </section>
        </div>


    

    <div class="form">
      <h1>Send your own testimony!</h1>
        <form id="formt" action="testimonialsdb.php" method="POST">
        <textarea name="testimony" id="testimony" cols="30" rows="10" placeholder="Insert testiomony..."></textarea>

        <input type="submit" name="submit" id="submit" value="Send">

        </form>
    </div>
     
    <?php
          
          include 'ufooter.php';
          
      ?>
</div>
</body>

</html>