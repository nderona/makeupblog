<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/SignUp.css">
</head>
<body>
    <div class="main-container">
    <?php
    
    include 'topMenu.php';

    ?>
    <div class="container">
        <form action="db/LogIndb.php" method="POST">
            <label for="username">Username: </label> <br>
            <input type="text" id="username" placeholder="Your Username" name="username"><br>
            <label for="password">Password: </label> <br>
            <input type="password" id="password" name="password" placeholder="Your Password" name="password"><br>
            <input type="submit" id="submit" value="Log In" name="submit">
        </form>
    </div>
    <?php
    
    include 'footer.php';

    ?>
    </div>
</body>
</html>