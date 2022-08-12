<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OOP || IN || PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h2>The Cars Program</h2>
<?php
        class Car {
            public $name;
            public $color;

            function set_name($name) {
                $this->name = $name;
            }


            // ! it will return it
            function get_name() {
                return $this->name;
            }
        }

        $toyota = new Car();
        $bmw = new car();

        // ! setting names for the objects we have created
        $toyota->set_name('Toyota');
        $bmw->set_name('BMW');

        echo $toyota->get_name();
        echo "<br>";
        echo $bmw->get_name();

?>
    
    </body>
</html>