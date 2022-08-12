<?php


$connection = mysqli_connect('localhost', 'root', '', 'register_db');
    if ($connection) {
        echo "<h1>connection successfull</h1>";
    } else {
        die ("database connection failed");
    }

    //* This means that you are inserting the values inside the columns that you have created in your database
    $query = "SELECT * FROM  users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED');
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
        <?php 
    //  mysqli_fetch_row
    // * [mysqli_fetch_assoc] will print out the keys and the values.
        while($row =  mysqli_fetch_assoc($result)) {
            ?>

            <pre>
                <h1>


            <?php
            // * [$row] is been use to collect the loop data from the database
            print_r($row);
            ?>
                </h1>
            </pre>

            <?php
        }
        ?>
    </div>
    </div>
</body>
</html>