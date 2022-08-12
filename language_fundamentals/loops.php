<?php

// ========> Loops in php <========
/*
    LOOPS -Execute code set number of times
*/


// ===> While loop ---> Don't know the number of iterations
// ===> Do-while loop ---> First do, then while
// ===> For loop ---> 
// ===> Foreach loop ---> 






// ========> While Loops <========
# @params - conditions
// $i = 0;
// while ($i <= 10) {
//     echo $i;
//     echo '<br>';
//     $i++;
// }

// $x = 1;

// while($x <= 5) {
//     echo "The number is: $x <br>";
//     $x++;
// }
// ===> Loops with $counter 
// $counter = 0;
// while ($counter < 10) {
//     echo $counter.'<br>';
//     $counter++;
// }

// echo '<br>';

// $counter = 0;
// while ($counter < 10) {
//     echo $counter.'<br>';
//     if($counter === 5) {
//         break;
//     }
//     $counter++;
// }

// $x = 1;

// while ($x <= 10) {
//     echo $x . "<br>";
//     // ===> anything the loop is executed the loop needs to be increased by otherwise it will run an infinite loop.
//         $x++;
// }


// $p = 5;
// while ($p <= 40) {
//     echo "The number is: " . $p;
//     echo "<br>";
//     $p++;
// }



// ========> Do...While Loops <========
# @params - conditions

$i  = 0;
do {
        echo $i;
        echo '<br>';
        $i++;
} while ($i < 10);

// do {
//     echo $counter.'<br>';
//     $counter++;
// } while ($counter < 10);

// $cookie = 1;

// do {
//     echo "I love cookies! <br>";
//     $cookie++;
// } while ($cookie <= 10);





// ========> For Loops <========

# For Loop
# @params - init, conditions, inc

// for ($i = 0; $i < 10; $i++){
//     echo $i.'<br>';
// }

// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
// }

// for ($x = 1; $x <= 10; $x++) {
//     echo "The number is: " . $x;
//     echo "<br>";
// }

// for ($i=0; $i < 10; $i++) { 
//     echo $i;
//     echo "<br>";    
//     echo "Number $i";
//     echo "<br>";    
// }


// ========> Foreach Loops <========
// ===> foreach are meant to work with arrays

// $names = array("John", "Micheal", "david");

// foreach ($names as $key) {
//     echo "My name is " . $key;
//     echo "<br>";
// }


// $people = array('Ibraheem', 'Adams', 'Hussain', 'Rasheed', 'Taye', 'Tunde');
// foreach ($people as $person) {
//     echo $person;
//     echo '<br>';
        
// }



// ===> Name is the key and the email is the value.
$people = array('Ibraheem' => 'ibraheemlayi@gmail.com', 'Adams' => 'adamsadeogun3@gmail.com', 'Hussain' => 'hussainty@gmail.com', 'Rasheed' => 'rasheedtaypo@email.info', 'Taye' => 'taye@yahoo.com', 'Tunde' => 'tunde@gmail.com');
foreach ($people as $person => $email) {
    echo $person.': '. $email;
    echo '<br>';
        
}

// 


?>