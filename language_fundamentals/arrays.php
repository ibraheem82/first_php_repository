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

    /* Array - Variable that hold multiple values
    - Indexed
    - Associative
    - Multi-dimensional

    */

    // =====> Indexed Array <=====

    // $people = array('Taye', 'Ayo', 'Ibraheem');
    // echo $people[1];
    // echo "<br>";

    // $ids = array(20, 40, 80, 67, 38, 838);
    // echo $ids[2];
    // echo "<br>";


    // ===> You can also write an array like this

    // $cars = ['Honda', 'BMW', 'Benz', 'Golf'];
    // echo $cars[1];
    // echo "<br>";


    // ===> Add to an array
    // $cars[4] = 'Range';
    // echo $cars[4];
    // echo "<br>";

    // ===> OR

    // $cars[] ='Muscle';
    // echo $cars[5];
    // echo "<br>";
 

    // echo count($cars);

    // [print_r] is use to show the whole arrays
    // ===> it is mostly use for debugging
    // ===> it is the echo for array 
    // print_r($cars);
    // echo "<br>";


    // ===>it is not only for array, you can  check any data types
    // ===> [var_dump] is use to the data type
    // ===> it will tell you everything you need to know about the array
    // var_dump($cars);











    // =====> Associative Array <=====
    // ===> allows to define keys and values

    // $people = array('Ibraheem' => 20, 'Tunde' => 40, 'Deji' => 37);

    // $ids = [22 => 'Dele',  73 => 'Wale', 72 => 'Tolu'];

    // echo $ids[22];


    // $people['Taye'] = 40; 
    // echo "<br>";

    // echo $people['Taye'];
    // echo "<br>";

    // print_r($people);
    // echo "<br>";

    // var_dump($people);
    // echo $people['Ibraheem'];















    // =====> Multi-Dimensional Array <=====
    // ===> They are arrays inside of arrays


    $cars = array(
        array('Toyota', 20, 10),
        array('Mercedes', 2, 90),
        array('Range', 20, 100),
        array('BMW', 202, 200),
        array('Chivy', 202, 10),
        array('Honda', 20101, 102)
    );
    echo $cars[2][2];
    echo "<br>";
    echo $cars[1][2];








    /*
    // ===> array can store many different values any data types in php.
    // ===> index of an array start with zero
    // ===> an array can be inside of array
    // ===> var_dump is a function that display structured informations about one or more expressions like, it types and value


    */
    // $numberList = array(23, 64, 89, 56, 109, 34, '8575757', '<h1>Ibrahem</h1>');
    // print_r($numberList);
    // echo $numberList[1];
    // echo "<br>";


    // $laptop_brand = array("HP", "Lenovo", "Asus", "Dell");

//    echo var_dump($laptop_brand);

//    echo "<br>";

//    $cars = array("BMW", "Audi", "Mercedes");

//    echo "<br>";
//     $cars2 = array("Volvo", "Chevy", "Volkswagen");

//    echo $cars[1];
//    echo "<br>";
//    echo "<br>";


    // $myCar = array("Audi", 2020, 75.304);
    // var_dump($myCar);

    // print_r($myCar);

    // // ===> merge arrays together

    // $cars = array_merge($cars, $cars2);
    // echo "<br>";
    // echo "<br>";



    // var_dump($cars);
    // print_r($cars);

    // echo "<br>";

    // $cars = array("Volvo", "BMW", "Toyota");
    // echo count($cars);




//     $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);

// for($x = 0; $x < $arrlength; $x++) {
//     echo $cars[$x];
//     echo "<br>";
//     echo $arrlength;
// }

// echo '<br>';


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";


// echo '<br>';
// echo '<br>';
// echo '<br>';


// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }


// ===> Spliting string into an array
// $string = "Banana,Apple,Peach";

// echo '<pre>';

// var_dump(explode(",", $string));

// echo '</pre>';

// echo '<br>';

// ===> combining array elements into string
//  implode;


// ===> check if elements exist in the array
// $names = ["ibraheem", "ayomide", "adisa", "omikunle"];

// echo '<pre>';
// var_dump(in_array("ibraheem", $names));
// echo '</pre>';

 

// ===> Seacrh element index in the array


// echo '<pre>';
// var_dump(array_search("Omikunle", $names));
// echo '</pre>';


// ========> Associative array   <========
// ===> associative array make use of key and values

// $person = [
//     'name' => 'Ibraheem',
//     'surname' => 'Omikunle',
//     'age'  => 20,
//     'hobbies' => ['Football', 'Reading', 'Coding']
// ];


// $cars = array("Audi" => 50.500, "BMW" => 40.700, "Mercedes" => 60.300);
// $car1["Mercedes"] = 30.900;
// echo $car1["Mercedes"];

// print_r($cars);

// foreach ($cars as $key => $value) {
//     echo "My " . $key . " has " .  $value . " mileage <br> ";
// }


// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// ===> you can also use print_r to print arrays

// echo '<pre>';
// print_r("ibraheem", $names));
// echo '</pre>';


// ===> Getting the element by Key
// echo $person['name'].'<br>';

// ===> setting element by Key

// $person['car'] = 'Range Rover';


// echo '<pre>';
// var_dump($person);
// echo '</pre>';


// ===> Null coalescing assignment operator
// ===> checking if there is address in the $person array
// if (isset($person['address'])) { 
//     $person ['address'] = 'nknown';
// }

// echo '<pre>';
// var_dump($person);
// echo '</pre>';


// ===> 


// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';


// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';


// ===> sorting by keys and value

// ksort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';



// asort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';






// ========> Two dimensional OR Multidimensional arrays <========

// $todos = [
//     ['title' => 'I want to build aapi with python', 'completed' => true],
//     ['title' => 'build an ecommerce website with django', 'completed' => false],
// ];

// echo '<pre>';
// var_dump($todos);
// echo '</pre>';

// ===> Expensive Cars|
// Audi, Mercedes, BMW|


// ===> Inexpensive Cars|
// Volvo, Ford, Toyota  |
// $cars = array(
//         "Expensive"   => array("Audi", "Mercedes", "BMW"), 
//         "Inexpensive" => array ("Volvo", "Ford", "Toyota")

//         );
// echo $cars["Expensive"];
// echo $cars["Expensive"][0];


























    ?>
    </body>
</html>