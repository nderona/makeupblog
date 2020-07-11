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
        <form action="db/SignUpdb.php" method="POST">
            <label for="name">Name: </label>  <br>
            <input type="text" id="name" placeholder="Your Name" name="name"> <br>
            <label for="Surname">Surname: </label> <br>
            <input type="text" id="surname" placeholder="Your Surname" name="surname"> <br>
            <label for="email">Email: </label> <br>
            <input type="email" id="email" placeholder="Your Email" name="email"><br>
            <label for="username">Username: </label> <br>
            <input type="text" id="username" placeholder="Your Username" name="username"><br>
            <label for="password">Password: </label> <br>
            <input type="password" id="password" name="password" placeholder="Your Password" name="password"><br>
            <input type="submit" id="submit" name="submit" value="Sign Up">
        </form>
    </div>
    <?php
    
    include 'footer.php';

    ?>
    </div>
</body>
</html>