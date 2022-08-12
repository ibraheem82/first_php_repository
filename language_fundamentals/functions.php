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

    // ========> Functions <========

    // =====> A function is a block of code written in a progress to perform some specific task.
    // =====> OR a - Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()


    */

    // -----> Two major types of functions <-----
    // ===> Built-in function
    // ===> User-defined function


    // -----> Why should you use function  <-----
    // ===> 1. Reusability 
    // ===> 2. Easy for error detection
    // ===> 3. Easily maintained

    // ========> Build in Functions <========

    // ===> String functions
    // ===> Math functions
    // ===> Date functions
    // ===> Array functions
    // ===> Random number functions




    // ========> DATE Functions <========
    // ===> 'd' = Day
    // ===> 'j' = Day without zeros
    // ===> 'D' = day of week (3 letters) 
    // ===> 'l' = Full day of the week
    // ===> 'm' = Month as a number with zeros
    // ===> 'n' = Month as a number without zeros
    // ===> 'M' = Month (3 letters)
    // ===> 'F' = Full month
    // ===> 'y' = Two-digit year
    // ===> 'Y' = Full year

    // echo "<br>";

    // echo date('j');

    // echo "<br>";

    // echo date('D');

    // echo "<br>";

    // echo date('l');

    // echo "<br>";

    // echo date('m');

    // echo "<br>";

    // echo date('n');

    // echo "<br>";

    // echo date('F');

    // echo "<br>";

    // echo date('Y/m/d');
    // echo "<br>";
    // echo date('d/m/Y');


            // =====> Time FUNCTIONS WITH <=====
            // ===> 'g' = Hours in 12-hour format without zeros
            // ===> 'h' = Hours in 12-hour format with zeros
            // ===> 'G' = Hours in 24-hour format without zeros
            // ===> 'H' = Hours in 24-hour format with zeros
            // ===> 'a' = am/pm in lowercase
            // ===> 'A' = am/pm in uppercase
            // ===> 'i' = minutes without zeros
            // ===> 's' = seconds without zeros

    // echo "<br>";

    // echo date('H:i:s a');
    // echo "<br>";

    // echo date('h:i:s a');
    // ===> to set time zone
    // date_default_timezone_set('Europe/Amsterdam');

    // ===> String to time
    // $time = strtotime("4:00pm December 03 2020");
    // echo "<br>";
    // ===> is the timestamp is the value represented as seconds calculated, since UNIX Epoch, January 1, 1970, and also called as UNIX timestamp.
    // echo "<br>";
    // echo date('m/d/y H:i am', $time);
    // echo "<br>";
    // echo $time;
    // echo "<br>";






    // =====> MATH FUNCTIONS <=====

    // ===> CEIL
    // echo ceil(.50) . "<br>";

    // ===> FLOOR
    // echo floor(0.50) . "<br>";

    // ===> ROUND
    // echo round(0.5433, 2) . "<br>";
 
    // ===> EXPONENTIAL
    // echo exp(4) . "<br>";


    


    // =====> STRING FUNCTIONS <=====

    // ===> STRING LENGTH

    // $str = "Today is wednesday  ";
    // echo strlen($str);



    // ===> STRING WORD COUNT

    // $firstName = "My first name is Ibraheem";
    // echo "<br>";
    // echo str_word_count($firstName);




    // ===> NOW TO FIND TEXT WITHIN A STRING
    // $email = "ibraheemomikunle82@gmail.com";
    // echo "<br>";
    // if (strpos($email, "@")) {
    //     echo "This is a valid email";
    // } else { 
    //     echo " This is a email input field";

    // }

    // echo "<br>";

    // ===> EVERY FIRST LETTER OF A WORD IS UPPERCASE
    // echo ucwords("What is your name?" . "<br>");

    // echo "<br>";

    // ===> WHOLE STRING TO UPPERCASE
    // echo strtoupper("What is your name?" . "<br>");



// ===> WHOLE STRING TO LOWERCASE
// echo strtolower("What is your name?" . "<br>");



















    // =====> ARRAY FUNCTIONS <=====

    // $personalInfo = array("Name" => "Ibraheem", "Age" => 20, "Country" => "Nigeria");
    // $moreInfo = array("State" => "Lagos", "Weight" => 80);

    // $personalInfo = array_merge($personalInfo, $moreInfo);

    // foreach ($personalInfo as $key => $value) {
    //     echo $key . " : " . $value . "<br>";
    // }


    // print_r($personalInfo);


    // echo "<br>";
    // ===> print only keys
    // print_r(array_keys($personalInfo));


    // ===> Print only values
    // print_r(array_values($personalInfo));


        // ===> Add value in array
    //     $cars = array("Volkswagen", "Audi", "Mercedes");
    //     array_push($cars, "Volvo");
    //     print_r($cars);


    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
            // ===> Search inside of an array
    // echo array_search("Volkswagen", $cars);



    // ===> Count the number of iitems in an array

    // echo "<br>";

    // echo count($cars);
    // echo "<br>";
    


    // $min = 1;
    // $max = 30;
    // echo "<br>";
    // echo rand(1, 10);
    // echo "<br>";

    // echo rand($min, $max);
    // echo "<br>";

    // ===> to get the highest maximum number.
    // echo getrandmax();



    // ===> Create Simple Function
    // function simpleFunction(){
        // echo 'My name is ibraheem';
    // }

    // ===> Run Simple Function
    // simpleFunction();




    // ===> Function With param
    function sayHello($name = 'World'){
        echo "Hello $name<br>";

    }

    // sayHello('Omikunle');
    // sayHello('Ibraheem');
    // sayHello('Ibraheem');



        // ===> Return Value
    // function addNumbers($num1, $num2){
        // echo $num1 + $num2;
    //     return $num1 + $num2;
    // }
    // echo addNumbers(40, 47);




        // ===> By Reference
    $myNum = 10;
    
    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";











    // $num1 = 10;
    // $num2 = 15;


    // function add($num1, $num2){
    //     $result = $num1 + $num2;
    //     return $result;
    // }
    //  echo "The number is: " . add($num1, $num1);

    // define 
    // Constants are always uppercase
    // ===> name has the same rules as variables
    // define("COMPANY_NAME", "Apples");

    //     echo COMPANY_NAME;

    //     // ===> CONST
    //     const MY_NAME = "IBRAHEEM";
    //     echo MY_NAME;

    ?>
</body>
</html>