<?php




    class User{
        public string $name;
        public string $surname;
        // private int $age;
        // ===> This is an integer but can accept a null value
        private ?int $age;
        // protected ?int $age;

        public static int $counter = 0;


        public function __construct($name, $surname){
            // echo $name.' '.$surname . "<br>";
            $this->name = $name;
            $this->surname = $surname;
            $this->age = null;
            self::$counter++;

        }

        // ===> method
        // => Setter
        public function setAge($age) {
            $this->age = $age;
        }

        // => Setter
        public function getAge() {
            return $this->age;
        }

        public static function getCounter() {
            return self::$counter;
        }

    }

    $p = new User("Adegoke", "deji");
    $p->setAge(40);

    echo '<pre>';
    var_dump($p);
    echo '</pre>';
    echo $p->getAge();

    $p1 = new User("Demeji", "ramon");
    echo '<pre>';
    var_dump($p1);
    echo '</pre>';

    echo User::$counter;
    echo "<br>";
    echo User::getCounter();


?>


