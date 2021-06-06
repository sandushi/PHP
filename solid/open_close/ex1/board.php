<?php 

    class Board {


        public function calculateArea($shapes = array()){
            $area = [];

            foreach($shapes as $shape){
                $area[] = $shape->area();
            }

            return array_sum($area);
        }
    }



?>