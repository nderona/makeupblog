<?php

Session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/changepw.css">
    <script defer src="js/profilevalidation.js"></script>
</head>

<body>
    <div class="main-container">
        <?php
    
    include 'utopMenu.php';
    
    ?>
    
            <div class="content">
                <div class="form">
                    <form action="changepwdb.php" method="POST" onsubmit= "return validatePw()">
                        <label for="">Old Password: </label>
                        <input type="password" name="oldpassword" id="OldPassword">
                        <label for="">New Password: </label>
                        <input type="password" name="newpassword" id="NewPassword">
                        <input type="submit" id="submit" name="submit">

                    </form>
                </div>
            </div>
    </div>
</body>

</html>