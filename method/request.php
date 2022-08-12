<?php
    if(isset($_POST["name"]) || isset($_POST["age"])) {
        echo "Hi ". $_REQUEST['name']. "<br/>";
        echo "Your age is ". $_REQUEST['age']. " years";
        exit();
    }
?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            NAME: <input type="text" name="name" />
            AGE: <input type="text" name="age" />
                <input type="submit" />
        </form>
    </body>
</html>