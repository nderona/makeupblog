<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/SignUpp.css">
    <script defer src="js/SignUpvalidation.js"></script>
</head>

<body>

        
<?php
include 'topmenu.php'; 
?>


<div class="title">
    <p> <br>
    SIGN IN
    <br>
</div>
 
<div class="content">
    <div class="form">
        <form onsubmit= "return validate()" action="db/SignUpdb.php" id="form" method="POST">
        <label for="">name: </label><br>
        <input type="text" name="name" id="name" required ><br>
        <label for="">surname: </label><br>
        <input type="text" name="surname" id="surname" required ><br>
        <label for="">email: </label><br>
        <input type="email" name="email" id="email" required><br>
        <label for="">username: </label><br>
        <input type="text" name="username" id="username" required><br>
        <label for="">password: </label><br>
        <input type="Password" name="password"  id="password" required><br>
        <input type="Submit" name="submit" value="Sign Up" id="Submit" required>
        <li><a href="LogIn.php">Already have an account? Log in</a></li>
    </form>
</div>
</div>


</body>
</html>