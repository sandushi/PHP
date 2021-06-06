<?php 

    require_once 'shape1.php';
    class Circle implements Shape1{
        public $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }


        public function area(){
            return pi()* ($this->radius * $this->radius);
        }
    }
?>