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
            <h1> Subscribers</h1>

         </div>
      </div>
      <div class="content">



         <table border="1">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Email</th>
               </tr>
            </thead>

            <tbody>
               <?php
            include '../db/dbconnection.php';

            $sql = "SELECT * FROM subscribers;";
            $result = $DB->query($sql);

            while($row = mysqli_fetch_assoc($result)){
               ?>


               <tr>
                  <td><?php echo $row['ID']?></td>
                  <td><?php echo $row['email']?></td>

               </tr>


               <?php
            }

         ?>

            </tbody>
         </table>
         <div class="button">
      <button id="button" onclick="location.href='messages.php'" type="button">Check your messages</button>
      </div>
      </div>

   </div>



   <?php
    
    include 'afooter.php';
    
    ?>
</body>

</html>