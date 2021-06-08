<?php 


require_once "controller/controller.php";
require_once "model/model.php";
require_once "view/view.php";


$model = new Model();
$controller = new Controller($model);
$view = new View($controller);

$view->input("Wood Apple");
$view->output();




?>