<!DOCTYPE html>
<html>
    <head>
        <title>File system</title>
</head>
<body>
    <?php 
    // $myFile = fopen("php_file_system/file.txt", "w");
    // $myFile = fopen("uploads/file.txt", "w");

    // $txt = "My name is ibraheem omikunle";
    // $txt = "My name age is " . $_POST['age'] . "\n";

    if (isset($_POST['submit'])) {
        // "w" will always overwrite each other when you submit the form
    // $myFile = fopen("uploads/file.txt", "w");


    $myFile = fopen("uploads/file.txt", "a");

    // $txt = "My name is ibraheem omikunle";
    $txt = "My name age is " . $_POST['age'] . "\n";


    fwrite($myFile, $txt);

    fclose($myFile);

    }

    // echo "<h1> $myFile </h1>";
    // echo $myFile;

    // echo $myFile;

?>
<form action="fileputter.php" method="post">
    <input type="number" name="age" value="">
    <input type="submit" name="submit" value="Submit">

</form>
    
</body>
</html> 