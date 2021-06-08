<?php 

include './controller/controller.php';

// echo ($_SERVER['DOCUMENT_ROOT']);

$controller = new Controller();

$controller->invoke();




?>