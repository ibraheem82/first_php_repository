<?php 
    // ===> ['filter_has_var'] Use to check for post or get values.
    // ===> Check for posted data
    // if (filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo  'No data';
    // }


    // if (filter_has_var(INPUT_POST, 'data')) {
    //     if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
    //         echo 'Email is valid';
    //     } else {
    //         echo 'Email is not valid';
    //     }
    // }

    // ===> if we want any email address and we want to remove any data that dosent belong in an email address ['filter_var'] ['FILTER_SANITIZE_EMAIL']
        /*
    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];
        // ===> Remove illegal characters
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is Not valid';
        }
    }

        // =======> Validations that we can do in php <========
    //===> FILTER_VALIDATE_BOOLEAN
    //===> FILTER_VALIDATE_EMAIL
    //===> FILTER_VALIDATE_FLOAT
    //===> FILTER_VALIDATE_INT
    //===> FILTER_VALIDATE_IP
    //===> FILTER_VALIDATE_REGEXP
    //===> FILTER_VALIDATE_URL
    



    // =======> sANITIZATIONS that we can do in php <========
    // ===> FILTER_SANITIZE_EMAIL
    // ===> FILTER_SANITIZE_ENCODED
    // ===> FILTER_SANITIZE_NUMBER_FLOAT
    // ===> FILTER_SANITIZE_NUMBER_INT
    // ===> FILTER_SANITIZE_SPECIAL_CHARS
    // ===> FILTER_SANITIZE_STRING
    // ===> FILTER_SANITIZE_URL
    */

    // $var = 23;
//    $var = '23UEUE737373Y638jdjdjdjdjddj383983983398388e8euehddgdgddududydyu';


/*
$var = '<script>alert(ibraheem)</script>';
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);



    if (filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var. ' is a number';
    } else {
        echo $var. ' is not a number';

    }
*/

/*
$filters = array(
    "data" => FILTER_SANITIZE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
);
print_r(filter_input_array(INPUT_POST, $filters))
*/


$arr = array(
    "name" => "ibraheem omikunle",
    "age" => "20",
    "email" => "ibraheemomikunle@gmail.com"
);

$filters =  array(
    "name" => array(
        // ===> ['FILTER_CALLBACK'] it allows us to apply functions to this values ['ucwords']
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );
print_r(filter_var_array($arr, $filters));

?>




 

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<input type="text" name="data2">
<button type="submit">Submit</button>
    
</form>