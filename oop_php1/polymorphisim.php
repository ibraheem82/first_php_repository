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
        public $occupation;
        // * Overriding the constructor and the [intro] function from the [Relation] class.
        public function __construct($father, $son, $occupation){
            $this->father = $father;
            $this->color = $son;
            $this->occupation = $occupation;
        }
        
        public function intro() {
            echo "<h1>The name of my father is{$this->father}, my own name is {$this->son} and am a {$this->occupation}</h1>";
        }

        

    }
        // ! Creating an object

    $ibraheem = new Ibraheem ("Fatiu", "Ibraheem", "Software Engineer");
    $ibraheem->intro();

?>
      </body>
</html>

