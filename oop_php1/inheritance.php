<html>
    <body>
        
  
<?php 
    class Relation {
        public $father;
        public $son;

        // ===> these are the attribute of the constructor
        function __construct($father, $son) {
            $this->father = $father;
            $this->son = $son;
        }

        public function intro() {
            echo "<h1>{$this->father} is the father of {$this->son}.</h1>";
        }
    }


    class Ibraheem extends Relation {
        public function message() {
            echo "<h1>Is ibraheem the son of fatiu?</h1>";
        }

    }
        // ! Creating an object

    $ibraheem = new Ibraheem ("Fatiu", "Ibraheem");
    $ibraheem->message();
    $ibraheem->intro();

?>
  </body>
</html>

