<?php 

    require_once "coffeeMachineInterface.php";

    class BasicCoffeeMachine implements CoffeeMachineInterface{
        public function brewCoffee($selection)
        {
            switch ($selection){
                case "ESPRESSO": 
                    return $this->brewEspresso();
                default : 
                    throw new \Exception();
            }
        }

        protected function brewEspresso(){
            echo "This is an Espresso coffee";
        }
    }




?>