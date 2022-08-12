<?php
if (isset($_POST['submit'])) {
    session_start();  // Start the session

        // ['htmlentities'] will make it more secure
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);


    // ===> this will allow us to redirect from php
    header('Location: session_test.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP session</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- // =====>  SESSION <=====
        // ===> sessions are use to store data on the server rather than on the computer of the client
        // ===> Good to use when ever you have a data that is sensitive.
        // ===> A session exit as long as the same browser is open
        // ===> when ever we close our browser our session will be destroy
        // ===> they are ways to carry informations across multiple pages.  -->
<!-- ion_start(); -->
   
    <!-- ===> to start a session [session_start();] -->
<!-- 
    // ===> to destroy a session  [session_destroy();] -->

    <!-- // ===> storing informations -->
<!-- 
    // $_SESSION["Name"] = "Ibraheem"; -->
    <!-- // $_SESSION["Age"] = 20; -->

    <!-- // echo "<h2>" . "Hello " . $_SESSION["Name"] . "</h2>";
    // session_destroy(); -->
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>


    
    </body>
</html>