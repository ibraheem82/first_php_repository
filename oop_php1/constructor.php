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

        function get_ceo() {
            return $this->ceo;
        }
    }
// ===> This create a new object and create the values to the constructor
$facebook = new Company("Mark", "Meta");
echo $facebook->get_name();
echo "<br>";
echo $facebook->get_ceo();
?>
  </body>
</html>

