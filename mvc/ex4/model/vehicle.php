<?php 

    class Vehicle
    {   
        private $name;
        private $type;
    

        public function setName($name)
        {
            $this->name = $name;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        public function getName()
        {
            return $this->name ;
        }

        public function getType()
        {
            return $this->type;
        }




    }


?>