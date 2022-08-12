<?php 
if (isset($_POST['submit'])) {

    $name = array("Ibraheem", "Student", "Peter", "Tkinter", "Daniel", "Waris", "Moriam", "Tom", "James", "Sunday");

    // echo "Yess it worked";
$username = $_POST['username'];
$password = $_POST['password'];

// echo ' Your Username is ' . $username . ' And your password is ' . $password;

$number_len = 5;

if (strlen($username) < $number_len) {
    echo "<h1>Username has to be longer than " . $number_len . '</h1>';

}

if (!in_array($username, $name)) {
    echo "<h1> sorry you are not allowed"  . '</h1>';

} else {
    echo "<h1> Welcome"  . '</h1>';
}




    }


?>