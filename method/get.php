<?php
    if(isset($_GET["name"]) || isset($_GET["age"])) {
        echo "Hi ". $_GET['name']. "<br/>";
        echo "Your age is ". $_GET['age']. " years";
        exit();
    }
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
            NAME: <input type="text" name="name" />
            AGE: <input type="text" name="age" />
                <input type="submit" />
            
        </form>
    </body>
</html>