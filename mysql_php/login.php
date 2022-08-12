<?php
if(isset ($_POST['submit'])){
    // echo "Yes we got it";
$username = $_POST['username'];
$password = $_POST['password'];

// if($username && $password){
// echo "<h1>Your username is </h1>" . $username;
// echo "<h1>Your password is </h1>" . $password;
// } else {
//      echo "These fields cannot be blank";
// }


$connection = mysqli_connect('localhost', 'root', '', 'register_db');


    if ($connection) {
        echo "<h1>connection successfull</h1>";
    } else {
        die ("database connection failed");
    }



}
?>



<!DOCTYPE html>
<html>
<head>
    <title>PHP || Form</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            

            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
    </div>
</body>
</html>