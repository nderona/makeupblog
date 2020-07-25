<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/removeUser.css">
   <title>Document</title>
</head>

<body>

   <div class="main-container">
      <?php
   
   include 'atopMenu.php';

   ?>
      <div class="content">



         <table border="1">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Surname</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Remove</th>
               </tr>
            </thead>

            <tbody>
               <?php
            include '../db/dbconnection.php';

            $sql = "SELECT * FROM users;";
            $result = $DB->query($sql);

            while($row = mysqli_fetch_assoc($result)){
               ?>


               <tr>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['surname']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['username']?></td>
                  <td><a href="removeUserdb.php?ID=<?php echo $row['ID']?>">Remove</a></td>
               </tr>


               <?php
            }

         ?>

            </tbody>
         </table>
      </div>

   </div>
</body>

</html>