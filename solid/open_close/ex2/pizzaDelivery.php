<?php

    require_once 'boat.php';
    require_once 'deliverable.php';
    require_once 'car.php';
    
    class PizzaDelivery {
        protected $transporter;

        public function __construct(Deliverable $transporter){
            $this->transporter = $transporter;
        }
        
        public function deliver(){
            return $this->transporter->deliver();
        }
    }


?>