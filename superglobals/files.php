<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <!-- // $_FILES
        // ===> How to upload files <===
    // ===> (1). Upload it to the root
    // ===> (2). Directly to the database

    // ===> [enctype="multipart/form-data"] must be included else the file upload will not work, anytime you want to upload a file, this specify how the file that is been submitted should be encoded.
    // 
        // echo $name = $_FILES['file']['name'] . "<br>";
        // echo $type = $_FILES['file']['type'] . "<br>"; -->
        <!-- // echo $tmp_location = $_FILES['file']['tmp_name'] . "<br>"; -->
        <!-- // echo $error = $_FILES['file']['error'] . "<br>"; -->










        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">SUBMIT</button>
        </form>
    
    </body>
</html>