<?php

    require_once "human.php";
    require_once "privateUniversity.php";
    require_once "governmentUniversity.php";
    
   $human = new Human(new PrivateUniversity());
   $human->getMessage();

?>