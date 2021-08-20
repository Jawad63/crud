<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `data` where id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name= $row['name'];
$genre= $row['genre'];
$game= $row['game'];

if (isset($_POST['submit'])) {
   $name= $_POST['name'];
   $genre= $_POST['genre'];
   $game= $_POST['game'];

   //Update query:

   $sql = "Update `data` set id = $id, name='$name', genre='$genre', game='$game', where id = $id";

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
               <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>

            <div class="form-group">
               <label>Genre:</label>
               <input type="text" class="form-control" placeholder="Enter your genre" name="genre" autocomplete="off" value=<?php echo $genre;?>>
            </div>

            <div class="form-group">
               <label>Game:</label>
               <input type="text" class="form-control" placeholder="Enter your game" name="game" autocomplete="off" value=<?php echo $game;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

         </form>
      </div>

   </body>
</html>