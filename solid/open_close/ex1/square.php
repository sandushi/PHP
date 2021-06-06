<?php

    require_once "shape1.php";
    class Square implements Shape1 {
        public $height;
        public $width;

        public function __construct($height, $width)
        {
            $this->height = $height;
            $this->width = $width;
        }


        public function area(){
            return $this->height * $this->width;
        }

    }
?>