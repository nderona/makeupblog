<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Menu</title>
    <link rel="stylesheet" href="css/atopMenu.css">

    <link rel="stylesheet" href="css/adtopMenu.css">

    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.7.0/css/all.css">
</head>

<body>
    <div class="main-container">
        <div class="main">
           
            <div class="links">
             <ul>
                <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li></li>
                <li><a href="addblog.php">Add Blog</a></li>
                <li><a href="editblog.php">Edit Blog</a></li>
                <li><a href="removeblog.php">Remove Blog</a></li>
                <li><a href="removeuser.php">Remove User</a></li>
            </div>
            <div class="search">
                <input type="text" id="search" placeholder=" Search..." name="search">
            </div>
            <div class="logo-container"> 
            <img src="../pictures/reverselogoblack.png" alt="logo.png" />
            </div>
            <div class="logout"> <button class="logOut" onclick="window.location.href='LogOut.php'">Log Out</button></div>
           
        </div>
    </div>
</body>








