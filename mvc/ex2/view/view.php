<?php 

    class View
    {
        public $controller;

        public function __construct($controller)
        {
            $this->controller = $controller;
        }

        public function input($data)
        {
            $this->controller->setItem($data);
        }

        public function output()
        {
            $results = $this->controller->getList();
            foreach($results as $result)
            {
                echo "<p> {$result} <br> ";
            }
        }
    }




?>