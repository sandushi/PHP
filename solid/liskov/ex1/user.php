<?php 

    class User {
        private $plan ;

        public function __construct($plan)
        {
            $this->setPlan($plan);
        }

        public function setPlan($plan){
            $this->plan = $plan;
        }

        public function getPlan(){
            return $this->plan;
        }
    }



?>