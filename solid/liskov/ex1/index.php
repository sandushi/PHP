<?php 
    require_once "basicCoffeeMachine.php";
    require_once "premiumCoffeeMachine.php";
    require_once "User.php";

    function getCoffeeMachine(User $user){
        switch($user->getPlan()){
            case "PREMIUM": 
                return new PremiumCoffeeMachine();
            case "BASIC": 
            default : 
                return new BasicCoffeeMachine();
        }
    }

    function prepareCoffee(User $user, $selection){
        $coffeeMachine = getCoffeeMachine($user);
        return $coffeeMachine->brewCoffee($selection);
    }

    $user = new User("PREMIUM");
    $selection = "ESPRESSO";
    prepareCoffee($user, $selection);


?>