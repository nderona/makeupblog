
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="css/log.css">
    <script defer src="js/LogInvalidation.js"></script>
</head>

<body>

<?php
include 'topmenu.php';
?>

<div class="containerss">
    <p> <br>
    LOG IN
    <br>
</div>


<div class="content">
<form onsubmit="return validate()" action="db/LogIndb.php" id="form" method="POST">
            <label for="username">username: </label> <br>
            <input type="text" id="username" placeholder="Your Username" name="username"><br>
            <label for="password">password: </label> <br>
            <input type="password" id="password" name="password" placeholder="Your Password" name="password"><br>
            <input type="submit" id="submit" value="Log In" name="submit">
            <li><a href="SignUp.php">Dont have an account? Create one</a></li>
        </form>
    </div>





]


</body>
</html>