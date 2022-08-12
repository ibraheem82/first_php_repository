<html>
    <body>
        
  
<?php 
    class Company {
        public $name;
        public $ceo;

        // ===> these are the attribute of the constructor
        function __construct($name, $ceo) {
            $this->name = $name;
            $this->ceo = $ceo;
        }

        function get_name() {
            return $this->name;
        }

        function __destruct()
        {
            echo "<h1>React was created by {$this->name} and {$this->ceo} is the owner.</h1>";
        }
    }
    // ===> This create a new object and create the values to the constructor
    $facebook = new Company("Meta", "Mark");
?>
  </body>
</html>




