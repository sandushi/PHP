<?php 

    abstract class Person {

        protected $firstName;
        protected $lastName;
        protected $gender;
        
        //static property
        protected static $bloodGroup = "A+";

        public function __construct($firstName, $lastName, $gender = 'f')
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->gender = $gender;
        }

        public function sayHello(){
            return "Hello my name is {$this->firstName} {$this->lastName}";
        }

        public function getGender(){
            return $this->gender;
        }

        public function message(){
            return "Hello I don't have a job yet <br>";

        }

        //abstract method
        abstract protected function prefix();

        
    }



?>