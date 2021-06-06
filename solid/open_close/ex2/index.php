<?php 

    require_once 'boat.php';
    require_once 'car.php';
    require_once 'pizzaDelivery.php';

    //Delivery by car
    $pizza1 = new PizzaDelivery(new Car());
    echo $pizza1->deliver();

    //Delivery by boat
    $pizza2 = new PizzaDelivery(new Boat());
    echo $pizza2->deliver();



?>