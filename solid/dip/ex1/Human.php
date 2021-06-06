<?php

    require_once "university.php";


    //higher level module uses the interfaces
    class Human {

        public $uni;
        public function __construct(University $uni)
        {
            $this->uni = $uni;
        }

        public function getMessage(){
            $this->uni->payment();
        }
    }

?>