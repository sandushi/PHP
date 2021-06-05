<?php 

    class Person {
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function info(){
            echo "Hello I am {$this->name} and I am {$this->age} years old. <br>";
        }
    }



?>