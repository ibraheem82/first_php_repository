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

// $x = 8;
// $y = 7;

// $z = ($x + $y) * 5;

// echo "The total is " . $z

// $price = 100;
// $vat = 21.13;

// $totalPrice = ($price * $vat) + $price;


// echo "Price " .  $price . "<br>";
// echo "VAT " .  $vat . "<br>";
// echo "Total prices : " . $totalPrice . "<br>";

// $x = 4;
// $y = 9;
// $z = 4;

// $average = ($x + $y + $z) / 3;

// echo number_format($average, 2, '.', ' ');




// $countries = array("Nigeria" => "Abuja", "Ghana" => "Accra", "Netherlands" => "Amsterdam", "Kenya" => "Nairobi", "Germany" => "Berlin", "Thailand" => "Bangkok", "Denmark" => "Cophengen", "Canada" => "Toronto" );

// foreach ($countries as $key => $value) {
//     echo "<h1>" . "The capital of " . $key . " is " . $value  ."</h1>";
//     echo "<br>";
// }

// $cm = 150;

// $cmToInch = $cm * 0.39;
// echo $cm . " centimeters is " . $cmToInch . " inches"




// $expenses = array(40, 70, 20, 85, 40);

// $totalAmount = 0;
// $amountOfExpenses = 0;

// foreach ($expenses as $expense) {
//     $totalAmount = $expense + $totalAmount;
//     // ===> OR
//     // $totalAmount += $expense;
//     $amountOfExpenses  = $amountOfExpenses  + 1;
//     // ===> OR
//     // $amountOfExpenses  += 1;
// }

// echo "My " . $amountOfExpenses . " biggest expenses were " . $totalAmount;






// $weather = array("Rain", "Sunshine", "Clouds", "hill", "Sleet", "Snow", "Wind");


// echo "<h3>" . "We've seen all kinds of weather this month, At the begining of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " With a few " . $weather[2] . " and some " . $weather[0] . " At least we didn't get any " . $weather[3] . " or " . $weather[4] . ". " . "</h3>";



// ===> Going to the bank on the 1st of january
// ===> want to deposit 1000 dollars
// ===> Interest rate is 5%
// ===> Withdrawl is after 5 years


// $deposit = 1000;
// $interest = 0.05;

// for ($years = 1; $years <= 5; $years++) {
//     $deposit += ($deposit * $interest);
//     echo "The total amount after " . $years . " year is: " . $deposit;
//     echo "<br>";
// }

// $price = 100;
// $vat = 0.21;
// function calculateVat($price, $vat) {
//     $calculatePrice = ($price * $vat) + $price;
//     return $calculatePrice;
// }
// echo "Price " . $price . "<br>";
// echo "Vat " . $vat . "<br>";
// echo "Total prices " . calculateVat($price, $vat);


// $year = 2000;

// function isLeapYear($year) {
//     if ($year % 400 == 0 || $year % 4 == 0) {
//         return true;
//     } else {
//         return false;
//     }
// }


// if (isLeapYear($year)) {
//     echo $year . "Year is a leap year";
    

// } else {
//     echo $year . " is not a leap year";
// }


// $num1 = 10;
// $num2 = 15;

// function addNumbers($num1, $num2){
//     return $num1 + $num2;
// }
// function subtractNumbers($num1, $num2){
//     return $num1 - $num2;
// }
// function divideNumbers($num1, $num2){
//     return $num1 / $num2;
// }
// function multiplyNumbers($num1, $num2){
//     return $num1 * $num2;

// }

// echo "Addition of " . $num1 . " and " . $num2 . " is " .  addNumbers($num1, $num2) . "<br>";


// echo "Subtraction of " . $num1 . " and " . $num2 . " is " .  SubtractNumbers($num1, $num2) . "<br>";


// echo "Multiplicity  of " . $num1 . " and " . $num2 . " is " .  multiplyNumbers($num1, $num2) . "<br>";


// echo "Division of " . $num1 . " and " . $num2 . " is " .  divideNumbers($num1, $num2) . "<br>";


// $num1 = 50;
// $num2 = 21;
// function swapNumbers($num1, $num2) {
//     $temp = $num1;
//     $num1 = $num2;
//     $num2 = $temp;

//     echo "After swapping num 1 = " . $num1 . " num 2 = " . $num2;
// }
// swapNumbers($num1, $num2);





// $num1 = 20;

// function evenOrNot($num1) {
//     if ($num1 % 2 == 0) {
//         echo $num1 . " is even";

//     } else {
//         echo $num1 . " is not even";
//     }
// }
// evenOrNot($num1);


// $num1 = 9;

// function isPrime($num1) {
//     if ($num1 == 11) {
//         return false;
//     } else {
//         for ($i = 2; $i < $num1 / 2; $i++) {
//             if ($num1 & $i == 0) {
//                 return false;

//             }

//         }
//         return 1;
//     }
// }

// if(isPrime($num1)) {
//     echo "This number is a prime";
// } else {
//     echo "This number is not a prime";
// }


// $numbers = array("Milk" => 2, "Cheese" => 4, "7-up" => 3);

// arsort($numbers);
// print_r($numbers);
// echo "<br>";

// $targetDays = mktime(0, 0, 0, 07, 19, 2020);

// $today = time();
// $differenceDays = ($targetDays - $today);


// $days = (int)($differenceDays / 86400);

// echo "<br>";
// echo "Days till next birthday: " .  $days . " days!";

// echo "<br>";
// $randNumber = rand(0, 100) / 10;


// echo $randNumber;



// $str = "My name is ibraheem, I'm 20 years old and I live in the Nigeria. I'm getting pretty old. I like PHP. because It's is a programming language.";
// function lowercaseCheck($str) {
//     echo strtolower($str);
// }

// lowercaseCheck($str);



// ===> searching for the place there is punctuation
// $str = "My name is ibraheem, I'm 20 years old and I live in the Nigeria. I'm getting pretty old. I like PHP. because It's is a programming language.";

// $punctuation = 0;


// function searchText($str, $punctuation) {
//     for ($i=0; $i < strlen($str); $i++) { 
//         # code...
//         if ($str[$i] == ".") {
//             $punctuation++;
//         }
//     } echo "The text has " . $punctuation . " punctuation";
// }

// searchText($str, $punctuation);





// $onlyNumbers = array(8, 7, 55, 44, 33, 44, 43, 56, 2,78, 90, 12, 200);

// echo "The lowest value is " . min($onlyNumbers) . " and the highest value is " . max($onlyNumbers);



// $str = "My name is Ibraheem Omikunle";
// echo "<br>";
// echo str_repeat($str, 8) . "<br>";
// echo "<br>";


$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );



  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";



for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

?>    
    </body>
</html>