<?php

    require_once 'deliverable.php';

    class Car implements Deliverable{

        public function deliver(){
            $by = "delivering by car ";
            $path = " on the road <br>";
            $item = "The pizza is ";

            return $item . $by . $path;
        }
    }

?>