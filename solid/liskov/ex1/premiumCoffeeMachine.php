<?php 

    class PremiumCoffeeMachine extends BasicCoffeeMachine{
        public function brewCoffee($selection)
        {
            switch ($selection){
                case "ESPRESSO": 
                    return $this->brewEspresso();
                case "Vanilla": 
                    return $this->brewVanilla();
                default : 
                    throw new \Exception();
            }

        }

        public function brewVanilla(){
            echo "This is a Vanilla Coffee";
        }
    }


?>