<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP SESSIONS || TESTING</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <h5>Thank you  <?php echo $name; ?>, You have subscribed with the email <?php echo $email; ?></h5>
    
    </body>
</html>