<?php
    class Person{
        // Public -> 
        /**
         * Access modifier in php
         * * You can only access a (Public) in the class
         *  TODO: this is going to give us the name of the class ( __CLASS__ ) for example this Person
         *  ? ( parent::__construct ) is used to call the parent constructor
         * * You dont need to instantiate to use the static method ( static )
         *  TODO: When you static propertises and static methods you shouldn't use ( this->) instead you use self 
         * 
         */
        private $name;
        private $email;
        // 
        // public  $ageLimit = 40;
        private $ageLimit = 40;


        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }


        // Getter and Setter in php

        public function setName($name){
            $this->name = $name;
        }



        public function getName() {
            return $this->name."<br>";
        }

        public function setEmail($email){
            $this->email = $email;

        }

        public function getEmail() {
            return $this->email."<br>";
        }
        // Creating a static method to get the value.
        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    /**
     * ? Instantiating object
     * 
     * 
     */
    # Static property and method
    // echo Person::$ageLimit;
    // echo Person::getAgeLimit();


    // $person1 = new Person('Ibraheem Omikunle', 'ibraheemomikunle@gmail.com');
    // $person1->setName('Ibraheem Omikunle');
    // echo $person1->getName();
    // echo $person1->getEmail();
    // $person1->name = 'Ibraheem Omikunle';

    // ===> Inheritance in php <===

    class Customer extends Person {
        private $balance;

       public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';

        }

        public function setBalance($balance){
            $this->balance = $balance;

        }

        public function getBalance() {
            return $this->balance."<br>";
        }
    }


      // $customer1 = new Customer('Adisa Adalaja', 'adisaadalaja@yahoo.com', 500);
    // echo $customer1->getBalance();

require_once "Person.php";
require_once "Student.php";

$student = new Student("Muhammed", "Buhari", "39ikww8jdy72ihd921ki");

echo '<pre>';
var_dump($student);
echo '</pre>';







































// class User{
//     public $name;
//     public $surname;
//     private $age;

//     public static $counter = 0;


//     public function __construct($name, $surname){
//         // echo $name.' '.$surname . "<br>";
//         $this->name = $name;
//         $this->surname = $surname;
//         self::$counter++;

//     }

//     // ===> method
//     // => Setter
//     public function setAge($age) {
//         $this->age = $age;
//     }

//     // => Setter
//     public function getAge() {
//         return $this->age;
//     }

//     public static function getCounter() {
//         return self::$counter;
//     }

// }

// $p = new User("Adegoke", "deji");
// $p->setAge(40);

// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getAge();

// $p1 = new User("Demeji", "ramon");
// echo '<pre>';
// var_dump($p1);
// echo '</pre>';

// echo User::$counter;
// echo "<br>";
// echo User::getCounter();


    ?>
