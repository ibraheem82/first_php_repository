<!-- * we included the database from db.php -->

<?php include "db.php";?>
<?php include "function_connection.php";?>




<!DOCTYPE html>
<html>
<head>
    <title>PHP || Form</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="col-sm-6">
  
  <form action="create.php" method="POST">
  <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control">
  </div>
  

  <div class="form-group">
  <label for="password">Password</label>
      <input type="password" name="password" class="form-control">
  </div>
    <div class="form-group">
        <select name="id" id="">
        <?php
            showalluserData();
            ?>
        </select>

    </div>
<input class="btn btn-primary" type="Submit" name="submit" value="UPDATE">
</form> 


  
    </div>
    </div>
</body>
</html>