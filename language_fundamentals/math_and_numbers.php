<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet"> 
    <body>
        <?php

        // =====> Arithmetic operators
        // ===> + - * / % 

// echo 90 + 24;
// echo "<br>";
// echo 90 - 70;
// echo "<br>";
// echo 62 * 12;
// echo "<br>";
// echo 167 / 43;
// echo "<br>";
// echo "<br>";

 
// ===> ++$x -------- Pre-increment
// ===> $x++ -------- Post-increment
// ===> --$x -------- Pre-decrement
// ===> $x-- -------- Post-decrement



// echo 62 * 12 + 45 / 2000 - 67;
// ===> order of operations in php with math operators
echo "<br>";
echo 5 + 5 * 10;  // = 55;
echo "<br>";

// ===> best way to calculate math in php 
/* 
===> with parenthesis we can change their order of operation in math.
// ===> multiplications and divisions goes b4 Additions and subtractions

*/

// $a  = 56;
// $b = 38;


// ===>Increment operator

// echo $a++;
// echo "<br>";

// echo ++$a;


// echo "<br>";

// echo (5 + 5) * 10; // = 100;


// $number1 = 12;
// $number2 = 24;
// echo "<br>";


// $price  = 10.5;

// echo "The price is " . $price;

// echo "<br>";
// echo $number1 * $number2;
// echo "<br>";



// ===> Assignment with math operators

// $a += $b; echo $a. '<br>';

// ===> Number checking functions

is_float(1.25); // true
is_double(1.25); // true
is_int(5); //  true
is_numeric("3.87"); // true

// ===> Conversion

// $conNumber1 = '12.34';
// $conNumber2 = (float)$conNumber1;

// ===> OR
// $conNumber2 = intval($conNumber1);
// echo "<br>";



// var_dump($conNumber2);
// echo "<br>";


// ========> Number function    <========


// echo "<h3>" ."The absolute number value of(-15) is " . abs(-15) . "</h3>" . "<br>";
// echo "The power of(2,  3) is " . pow(2, 3) . "<br>";
// echo "The square root of(16) is " . sqrt(16) . "<br>";
// echo "The maximum number between(2, 9, 3) is " . max(2, 9, 98) . "<br>";
// echo "The minimum number between(12, 45) is " . min(2, 5) . "<br>";
// echo "Round (7.9) is " . round(7.9) . "<br>";
// echo "floor(6.2) is " . floor(6.2) . "<br>";
// echo "ceil (12.2) is " . ceil(12.2) . "<br>";

// ========> Number Formatting    <========
// ===> way numbers is formatted in php
// $number_for = 123456789.377467646;
// echo number_format($number_for, 3, '. ', ' ,');


    ?>
    
    </body>
</html>