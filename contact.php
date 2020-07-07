<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css">
  <script defer src="contactvalidation.js"></script>

</head>

<body>
  <div class="container">
   
   
  <?php
            include 'topmenu.php';
        
 ?>



    <div class="containers">
      <p> <br>
        We are always improving so give us your feedback.
      <br></p>

      <div class="content">
        
     
        <div class="form">
          
          <form>
          <form onsubmit=" return validatecontact()" id="form" >
            <label for="fname">name</label>
            <input type="text" id="fname" name="firstname" placeholder="your first name">
            <label for="lname">email</label>
            <input type="text" id="lname" name="lastname" placeholder="your email">
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit" id="submit">
          </form>

        </div>
      </div>
    </div>
  </div>



  <?php
            include 'footer.php';
        
 ?>

</body>



</html>