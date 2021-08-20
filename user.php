<?php
include 'connect.php';
if (isset($_POST['submit'])) {
   $name= $_POST['name'];
   $genre= $_POST['genre'];
   $game= $_POST['game'];

   //insert query:

   $sql = "insert into `data` (name,genre,game) values('$name','$genre','$game')";

   $result = mysqli_query($connection,$sql);
   if ($result) {
         header('location:display.php');
   }  else {
      die(mysqli_error($connection));
   }
}

?>

<!doctype html>
<html lang="en">
   <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD</title>
   </head>

   <body>

      <div class="container py-5">
         <form method="post">

            <div class="form-group">
               <label>Name:</label>
               <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
               <label>Genre:</label>
               <input type="text" class="form-control" placeholder="Enter your genre" name="genre" autocomplete="off">
            </div>

            <div class="form-group">
               <label>Game:</label>
               <input type="text" class="form-control" placeholder="Enter your game" name="game" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

         </form>
      </div>

   </body>
</html>