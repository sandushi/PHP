<?php 

    require_once 'shape1.php';
    class Triangle implements Shape1 {
        public $height;
        public $base;

        public function __construct($height, $base)
        {
            $this->height = $height;
            $this->base = $base;
        }

        public function area(){
            return ($this->height * $this->base) /2 ;
        }

    }

?>