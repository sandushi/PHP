<?php 

    require_once "model/employeeModel.php";

    class Controller 
    {
        private $model;

        public function __construct()
        {
            $this->model = new EmployeeModel();
        }

        public function getData()
        {
            return $this->model->getEmployeeList();
        }

        public function setData($emp)
        {
            $this->model->setEmployee($emp);
        }
    }




?>