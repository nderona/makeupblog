<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Menu</title>
    <link rel="stylesheet" href="css/adtopMenu.css">
    <script defer src="../js/hamburger.js"></script>


    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>

<body>
    <div class="main-container">
        <div class="main">
           
            <div class="links">
            <div class="none">
             <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li></li>
                <li><a href="addblog.php">Add Blog</a></li>
                <li><a href="editblog.php">Edit Blog</a></li>
                <li><a href="removeblog.php">Remove Blog</a></li>
                <li><a href="removeuser.php">Remove User</a></li>
                <li><a href="atestimonials.php">Testimonials</a></li>
                <li id="more"><a href="more.php">More...</a>
                    <ul>
                        <li><a href="subscribers.php">Subscribers</a></li>
                        <li><a href="messages.php">Messages</a></li>
                    </ul>
                    </li>
            </div>
            <div class="hamburger">
                <button class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i> </button>
                </div>
                
            </div>
            <div class="logo-container"> 
            <img src="../pictures/adminlogo.png" alt="logo.png" />
            </div>
            <div class="logout"> <button class="logOut" onclick="window.location.href='LogOut.php'">Log Out</button></div>
           
        </div>
    </div>
</body>








