<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NM Makeup</title>
    <link rel="stylesheet" href="makeupblogphase1.css">
    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>

<?php
include 'topMenu.php';?>

<body>

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
                <button class="cta-select">Get to know us</button>
                <button class="cta-add">Recent Posts</button>
            </div>
        </div>
        <div class="cover">
            <img src="images/coverphoto.png" alt="coverphoto.png" />
        </div>
    </section>
</main>


<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section-subscribe">

               <form action="makeupblog.html" method="post">
                    <h4>  Subscribe to our Newsletter</h4>
                   <input type="email" placeholder=" Enter you email address" id="email">
                   <button type="submit" id="btn">Subscribe</button>

               </form>
            </div>

           <!-- <div class="footer-section-social">
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-facebook"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-snapchat"></i></a>
            </div> --> 
           
        </div>
   
        <div class="footer-bottom">
            &copy; NMmakeup.com | Designed by Marigona Kadriu & Nderona Kamberi
        </div>
    </div>
</footer>

</html>