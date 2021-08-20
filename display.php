<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Display</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
   
   <div class="container py-5">
      <button class="btn btn-primary">
         <a href="user.php" class="text-light" style="text-decoration: none;">Add User</a>
      </button>


      <table class="table">

         <thead>

            <tr>
               <th scope="col">#</th>
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">Mobile</th>
               <th scope="col">Password</th>
               <th scope="col">Operation</th>
            </tr>

         </thead>

         <tbody>
         <!--Here comes the data tha should be displayed from the DB table:-->

            <?php
            $sql="Select * from `crud`";
            $result = mysqli_query($connection, $sql);

            if ($result) {
               while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $email = $row['email'];
                  $mobile = $row['mobile'];
                  $password = $row['password'];

                  echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$name.'</td>
                           <td>'.$email.'</td>
                           <td>'.$mobile.'do</td>
                           <td>'.$password.'do</td>
                        </tr>';
               }
            }

            ?>
            
         </tbody>

      </table>

   </div>

</body>
</html>