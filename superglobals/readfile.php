<!DOCTYPE html>
<html>
    <head>
        <title>Read file</title>
    </head>
    <body>

    <?php 
    $filePath = "uploads/file.txt";

    // It read everything from the style and make a string of it
    $output = file_get_contents($filePath);

    // echo $output . "<br>";
    // ===> [ explode ] will explode $output out of the line break ["\n"] anytime a new line is created we want to explode
    $ages = explode("\n", $output);

    // Get the total age

    $totalAge = 0;
    $i = 0;


    foreach($ages as $age) {
        echo $age;
        echo $age . "<br>";
        echo "<br>";
         $totalAge = $totalAge + (int)$age;
         $i++;

    }

    echo "The average age is " . ($totalAge / $i);



?>

 

    </body>
</html>