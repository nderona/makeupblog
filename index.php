<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NM Makeup</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<div class="main-container">
    <?php
    
    include 'topMenu.php';

?>
<main>
    <section class="presentation">
        <div class="introduction">
            <div class="intro-text">
                <h1><b>Welcome.</b></h1>
                <p><i> Everything you need to know about
                    the beauty world & trends. Makeup reviews, tutorials, beauty tips & so much more.</i>
                </p>
            </div>
            <div class="cta">
                <button class="cta-select" onclick="window.location.href='SignUp.php'">Sign Up</button>
                <button class="cta-add" onclick="window.location.href='LogIn.php'">Log In</button>
            </div>
        </div>
        <div class="cover">
            <img src="pictures/coverphoto.png" alt="coverphoto.png" />
        </div>
    </section>
</main>
<?php
    
    include 'footer.php';

?>
</div>

</html>