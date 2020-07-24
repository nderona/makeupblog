<?php
    include '../db\dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/Blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="main-container">
        <?php
         include 'utopMenu.php';?>

    
        <div class="content">

                <?php
            
            
            $sql="SELECT * FROM blogs ORDER BY ID desc;";
            $results=$DB->query($sql);
            
            while($row=mysqli_fetch_assoc($results)){
                ?>

                <div class="post">
                    <div id="title">
                        <h1><?php echo $row['title'];?></h1>
                    </div>
                    <div id="image"><img src="../<?php echo $row['imagepath'];?>" alt=""></div>
                    <div id="text">
                        <p><?php echo $row['text'];?> </p>
                    </div>
                </div>
                <?php  } ?>
            </div>
  

    </div>

</body>

</html>
            <!-- <div class="design1">
                <div class="title">
                    <h3>Lorem, ipsum.</h3>
                </div>
                <div class="image"><img src="../pictures/look1.jpg" alt=""></div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore distinctio error nam nulla quis
                        harum, asperiores facere reprehenderit exercitationem quo deserunt, laborum ipsam dolore quae
                        praesentium! Similique error rerum harum!</p>
                </div>
            </div>

            <div class="design2">
                <div class="part1">          
                <div class="title2"><h3>Lorem, ipsum.</h3></div>
                <div class="image2"><img src="../pictures/look2.jpg" alt=""></div></div>

                <div class="part2">
                <div class="description2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore distinctio error nam nulla quis
                        harum, asperiores facere reprehenderit exercitationem quo deserunt, laborum ipsam dolore quae
                        praesentium! Similique error rerum harum!</p>
                </div>
                </div>
            
            </div>
            <div class="design3">
                <div class="part1-3">          
                <div class="image3"><img src="../pictures/look3.jpg" alt=""></div></div>

                <div class="part2-3">
                <div class="title3"><h3>Lorem, ipsum.</h3></div>
                <div class="description3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore distinctio error nam nulla quis
                        harum, asperiores facere reprehenderit exercitationem quo deserunt, laborum ipsam dolore quae
                        praesentium! Similique error rerum harum!</p>
                </div>
                </div>
            
            </div>
        </div> 

    </div>
</body>

</html>-->