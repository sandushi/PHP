<?php

    require_once 'deliverable.php';

    class Boat implements Deliverable{

        public function deliver(){
            $by = "delivering by boat ";
            $path = " on the river <br>";
            $item = "The pizza is ";

            return $item . $by . $path;
        }
    }

?>