<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <div class="main-container">
    <?php
        include "topmenu.php";
     ?>
    <div class="container">
      <h2>Contact Us</h2>
      <p>Swing by for a cup of coffee, or leave us a message:</p>

      <div class="content">
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.669833357257!2d21.150935314970624!3d42.64715892491562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e8d5d607f25%3A0xa31dd05b21bd09de!2sUniversiteti%20p%C3%ABr%20Biznes%20dhe%20Teknologji!5e0!3m2!1sen!2s!4v1592571673830!5m2!1sen!2s"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
        <div class="form">
          <form onsubmit="" id="form" >
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            <label for="lname">Surname: </label>
            <input type="text" id="surname" name="surname" placeholder="Your surname..">
            <label for="country">Country</label>
            <select id="country" name="country">
            <option value="" disabled selected>Select your option</option>
              <option value="Kosovë">Kosovë</option>
              <option value="Shqipëri">Shqipëri</option>
              <option value="Maqedoni">Maqedoni</option>
            </select>
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit" id="submit">
          </form>

        </div>
      </div>
    </div>
  <?php
        include "footer.php";
     ?>
</body>
</div>
</html>