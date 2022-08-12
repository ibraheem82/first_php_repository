<?php 
    if (isset($_POST["name"]) || isset($_POST["age"])) {
        if(preg_match("/[^A-Za-z-'-]/",$_POST['name'])) {
            die("Invalid name. Name should be alpha");
        }
        echo "hello". $_POST['name']. "<br />";
        echo "Your age is ". $_POST['age']. "<br />";
    }
        exit();
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