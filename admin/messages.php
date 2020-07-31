<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/removeuser.css">
   <title>Document</title>
</head>

<body>

   <div class="main-container">
      <?php
   
      include 'atopMenu.php';

      ?>

      <div class="container">
         <div class="title">
            <h1> Messages</h1>

         </div>
      </div>

      <div class="content">



         <table border="1">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>name</th>
                  <th>email</th>
                  <th>subject</th>
               </tr>
            </thead>

            <tbody>
               <?php
            include '../db/dbconnection.php';

            $sql = "SELECT * FROM contact;";
            $result = $DB->query($sql);

            while($row = mysqli_fetch_assoc($result)){
               ?>


               <tr>
                  <td><?php echo $row['ID']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['subject']?></td>

               </tr>


               <?php
            }

         ?>

            </tbody>
         </table>
         <div class="button">
      <button id="button" onclick="location.href='subscribers.php'" type="button">Check your subscribers list</button>
   </div>

      </div>

   </div>


   
   <?php
    
    include 'afooter.php';
    
    ?>
</body>

</html>