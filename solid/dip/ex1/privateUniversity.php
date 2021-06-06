<?php

    require_once "university.php";

    //lower level modules implements the interface
    class PrivateUniversity implements University{
        public function payment()
        {
            echo "There is a payment";
        }
    }

?>