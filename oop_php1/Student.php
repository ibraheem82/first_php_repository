php<?php


require_once "Person.php";


    class Student extends User{
        public string $studentId;


        public function __construct($name, $surname, $studentId)
        {
                // ===> will be set to null
            // $this->age = 90;
            // $this->studentId = $studentId;
            // parent::__construct($name, $surname);
            

            
            parent::__construct($name, $surname);
            $this->age = 90;
            $this->studentId = $studentId;
        }

         
    }



?>