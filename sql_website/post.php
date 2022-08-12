<?php
    require('config/db.php');

    // =====>Getting the id for a single post <=====
    // ===> this is an extra security precaution ( mysqli_real_escape_string ) <- it will escape any dangerous characters or something harmful
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create a query to the database
    $query = 'SELECT * FROM posts WHERE id =  ' .$id;

    // Get the result
    // This will create a query
    $result = mysqli_query($conn, $query);


    // Fetch the data
    // ===> ( MYSQLI_ASSOC ) is use to my get associative array
    // ===> 
    // $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // It will take the one post and turn it into an associative array
    // ===> ( mysqli_fetch_assoc ) is use to get a single post from the database.
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);


    // Free Result
    // This will frees the result from memory
    mysqli_free_result($result);


    // ===> to close the connection
    mysqli_close($conn);
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP || MYSQL \ content</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            
        <h1><?php echo $post['title']; ?></h1>
                    <!-- Accessing the arrays because it is an associate array -->
                    <h3></h3>
                    <small>Created on
                        
                    <?php echo $post['created_at']; ?> by 
                    
                    <?php echo $post['author']; ?>        

                </small>

                <p><?php echo $post['body']; ?></p>
                 
                






        </div>
    </body>
</html>