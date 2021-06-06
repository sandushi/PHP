<?php

    require_once "university.php";

    //lower level modules implements the interface
    class GovernmentUniversity implements University{
        public function payment()
        {
            echo "There is no payment";
        }
    }

?>