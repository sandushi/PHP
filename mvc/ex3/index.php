<?php 


require_once "controller/controller.php";
require_once "model/employee.php";
require_once "view/employeeListView.php";



$emp = new Employee("Matthew","Warthik","Senior SE","35","0123456789","matthew@gmail.com");

$controller = new Controller();
$view = new EmployeeListView($controller);

$view->input($emp);
$view->output();


?>