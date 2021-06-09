<?php 

    require_once "controller/vehicleController.php";
    require_once "model/vehicle.php";
    require_once "view/vehicleView.php";

    $vehicle = new Vehicle();
    $vehicle->setName("wagon r");
    $vehicle->setType("car");

    $view = new VehicleView();

    $controller = new VehicleController($vehicle, $view);

    $controller->updateView();

    // $controller->setVehicleName("Honda fit");

    // $controller->updateView();

?>