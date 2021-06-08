<?php 

    class Controller
    {
        private $model;

        public function __construct($model)
        {
            $this->model = $model;
        }

        public function getList()
        {
            return $this->model->getFruits();
        }

        public function setItem($data)
        {
            $this->model->setFruit($data);
        }
    }




?>