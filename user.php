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

   <div class="container my-5">
      <form method="post">

         <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
         </div>

         <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
         </div>

         <div class="form-group">
            <label>Mobile:</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
         </div>

         <div class="form-group">
            <label>Password:</label>
            <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>

      </form>
   </div>




  </body>
</html>