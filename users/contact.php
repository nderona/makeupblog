<?php

Session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/contact.css">

</head>

<body>
  <div class="container">


    <?php
            include 'utopmenu.php';
        
 ?>

    <div class="content">
      
        <form action="usercontact.php" method="POST">
        <input type="text" name="name" id="name" style="display: none;" value="<?php echo $_SESSION['name']; ?>">
        <input type="email" name="email" id="email" style="display: none;" value="<?php echo $_SESSION['email']; ?>">
        <label for="" id="username">Name: <?php echo $_SESSION['name']; ?> </label> <br>
        <label for="" id="username">Surname: <?php echo $_SESSION['surname']; ?> </label> <br>
        <label for="" id="username">Email: <?php echo $_SESSION['email']; ?> </label> <br>
  

          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>

          <input type="submit" id="submit" name="submit">



      
    </div>



    <?php
    
    include 'ufooter.php';
    
    ?>


</body>



</html>