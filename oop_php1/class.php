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
        class Cars {
            public $name;
            public $color;

            function set_name($name) {
                $this->name = $name;
            }


            function get_name($name) {
                $this->name = $name;
            }
        }
?>
    
    </body>
</html>