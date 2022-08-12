<?php

# CONDITIONALS
/*
    ==
    ===
    <
    >
    <=
    !=
    !==
*/

// ========> Conditionals statement <========
// ===> If statement
// ===> Else statement
// ===> Else if statement
// ===> Switch statement

// $age = 20;


// if ($age < 20) {
//     echo "Sorry, you are too young";
// } elseif ($age > 50) {
//     echo "You are too old to party";
// } elseif ($age < 10) {
//     echo "You need to be in bed";
// } elseif ($age > 18 && $age < 21) {
//     echo "You are not allowed to drink!!";
// } else {
//     echo "You are not enough to go out";
// }
















// ========> Logical operators <========
// ===> And --- Both X and Y are true
// ===> &&  --- Both X and Y are true
// ===> OR  --- Either X and Y are true
// ===> ||  --- Either X and Y are true
// ===> XOR --- Either X and Y are true, not both
// ===> !   --- true if X is not true
// ===> 1   --- True - 0 = False


// $x = 5;
// $y = 10;

// if ($x == $y xor 1 == 2) {
//     echo "True!";
// } else {
//     echo "False!";
// }



/*
$num = 6;
// $num ='5';

if ($num == 5 ) {
    echo '5 passed';
} elseif($num == 6){
    echo '6 passed';
}  else {
    echo 'did not pass';
}
*/

# NESTING IF
$num = 8;

/*

if($num > 4){
    if ($num < 10) {
        echo "$num passed";
        
    }
}
*/


/* LOGICAL OPERATORS
    and     &&
    or     ||
    xor    
*/

if ($num > 4 AND $num < 10) {
    echo "$num passed";

}





// $age = 20;
// $salary = 500000;

// if ($age === 20) {
//     echo "true";
// }

// ===> without curly braces
// if ($age === 20) echo "true";



// if ($age > 20) {
//     echo "true";
// } else {
//     echo "false";
// }

// if ($age == 20) {
//     echo "true".'<br>';
// }


// if ($age == '20') {
//     echo "false".'<br>';
// }


// if ($age === 20) {
//     echo "true".'<br>';
// }

// ========> if AND <========
// if ($age = 20 && $salary === 500000){
//     echo "Do something";
// }




// ========> if OR <========
// ===> in OR either of the conditions can be true
// if ($age > 20 || $salary === 500000){
//     echo "Do something";
// }


// echo '<br>';


// ========> Ternary if <========
//  echo $age < 22 ? 'Young' : 'old';


// ========> Short Ternary <========
// $myage = $age ?: '18';

// echo '<pre>';
// var_dump($myage);
// echo '</pre>';

// ========> Null coalescing operator <========
// ===> if the name is set take the name otherwise take john.
// $myName = isset($name) ? $name : 'John';
// echo ($myName);

// ===> OR
// $myName = $name ?? 'John';

// echo '<br>';




// ========> Switch <========
// $userRole = 'admin';
// switch ($userRole) {
//     case 'admin';
//         echo 'admin';
//         break;
//     case 'editor';
//         echo 'editor';
//         break;
//     case 'user';
//         echo 'user';
//         break;
//     default:
//         echo 'Invalid role';
// }



// $role = "Vistor";


// switch ($role) {
//     case 'Vistor';
//         echo "Welcome Visitor";
//     break;
//     case 'Admin';
//         echo "Welcome Admin";
//     break;
//     case 'Superadmin';
//         echo "Welcome Superadmin";
//     break;
//     case 'Boss';
//         echo "Welcome Boss";
//     break;
//     default:
//         echo "User has no role";
// }
?>