<?php 


    class VehicleController
    {
        private $model;
        private $view;

        public function __construct($model, $view)
        {
            echo "controller construct<br>";
            $this->model = $model;
            $this->view = $view;
        }

        public function getVehicleName()
        {
            return $this->model->getName();
        }

        public function getVehicleType()
        {
            return $this->model->getType();
        }

        public function setVehicleName($name)
        {
            return $this->model->setName($name);
        }

        public function setVehicleType($type)
        {
            return $this->model->setType($type);
        }

        public function updateView()
        {
            $this->view->printVehicleDetails($this->model->getName(), $this->model->getType());
        }
    }





?>