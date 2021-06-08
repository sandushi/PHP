<?php 

    class Model{

        private $fruitArr =array("Orange","Apple","Pineapple");

        public function getFruits()
        {
            return $this->fruitArr;
        }

        public function setFruit($fruit)
        {
            array_push($this->fruitArr,$fruit);
        }

    }




?>