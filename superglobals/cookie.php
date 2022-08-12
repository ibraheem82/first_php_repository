<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php
    
  
    // =====> COOKIE <=====
    // ===> they are stored on the computer of the user, probaly hacker can easiy gets to it.
    // ===> everytime a user request a url to the server all the cookie data for that website will be automatically sent to the server within the request
    // ===> Small file that the webserver stores on the client computer
    // ===> if you do not include an expiration date, the cookie will only be stored for the current session
    // ===> a cookie can only be read from the domain it has been issud from.

    /*
    setcookie();
    // ===> ARGUMENTS COOKIES
    (1) Name
    (2) Value
    (3) Expire
    (4) Path
    (5) Domain
    (6) Security
    */
    $time = time() + 86400 * 30;

    setcookie("name", "Ibraheem", $time);

    print_r($_COOKIE);

    ?>
    
    </body>
</html>