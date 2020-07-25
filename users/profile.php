<?php

Session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
    <script defer src="js/profilevalidation.js"></script>
</head>

<body>
    <div class="main-container">
        <?php
    
        include 'utopMenu.php';
    
        ?>

    
            <div class="content">
                <div class="form">
                    <form action="changeinfo.php" method="POST" onsubmit= "return validate()">

                        <div class="input">
                        <label for="">Username: <?php echo $_SESSION['username']; ?> </label> <br>
                        <label for="">Name: </label>
                        <input type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>"> 
                        <label for="">Surname: </label>
                        <input type="text" name="surname" id="surname" value="<?php echo $_SESSION['surname']; ?>"> 
                        <label for="">Email: </label>
                        <input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>"> 
                        <input type="submit" id="submit" name="submit"> 
                        </div>
                       
                        <div id="pw"><a href="changepw.php" id="a" >Change Password</a></div>
                    </form>
                </div>
            </div>
    </div>
</body>

</html>