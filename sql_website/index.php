<?php
    require('config/db.php');

    // Create a query to the database
    $query = 'SELECT * FROM posts';

    // Get the result
    // This will create a query
    $result = mysqli_query($conn, $query);


    // Fetch the data
    // ===> ( MYSQLI_ASSOC ) is use to my get associative array
    // ===> 
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            
        <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
                <div class="well">
                    <!-- Accessing the arrays because it is an associate array -->
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on
                        
                    <?php echo $post['created_at']; ?> by 
                    
                    <?php echo $post['author']; ?>        

                </small>

                <p><?php echo $post['body']; ?></p>
                    

                
                <!-- we want to make sure that we can grab a specific post from the database -->
                <a class="btn btn-default" href="post.php?id=<?php echo $post['id']; ?>">Read More</a>

                </div>


            <?php endforeach; ?>
        </div>

    
    </body>
</html>