
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


/* ======> DATA TYPES
- String
- Integers
- floats
- Booleans
- Arrays
- Objects
- Null
- Resource
*/

$output = 'Hello World';
$num1 = 4;
$float1 = 4.4;
$bool1 = true;
echo  $output;

// ===> Variable start with dollar sign
// ===> the best way to write a variable is to start with a lower case.
// ===> a variable can start with an underscore
// ===> string are sequence of characters
$firstname = "Ibraheem";
$lastname = "Omikunle";
$age = 22;
$number = 100;

// echo $name . " " . $number;

$name = "<h1> Good Morning Ibraheem</h1>";

// echo $name;

// $str = "Hello & Welcome to Simplilearn";
// $num = 5;
// $float = 7.6;

echo "My name is " . $firstname. " " . $lastname;
echo "<br>";
echo "<h1>" . $firstname . " is " . $age . " years old " . "</h1>"; 


// ===> Another way to concatenate variables
// ===> Using double qoutes allows u to concatenate without Using [.] symbol

$string1 = "Good";
$string2 = "Morning";

$greeting = "$string1 $string2";


echo $greeting;

echo "<br>";

// ===> escaping strings
// ===> you only need to escape when using single qoutes but with double qoutes you dont need to escape it.
$they = 'They\'re Here';
echo $they;

echo "<br>";


$say = "They're here again";

echo $say;

echo "<br>";


// ===> constant in php dont change
// ===> CONSTANT ARE CASE SENSITIVE
// ===> constant name first
define('NAME', 'My Name Is Ibraheem Omikunle');
// ===> to make it incase sensitive use ['true']
// define('NAME', 'My Name Is Ibraheem Omikunle', true);
// 
echo NAME;




    ?>
    </body>
</html>
