<?php 
    require_once "coder.php";
    require_once "worker.php";

    class Developer implements Coder, Worker{
        public function Code(){
            echo "I am coding as a Developer<br>";
        }
        public function takeBreak()
        {
            echo "I am taking a break as a Developer<br>";
        }
        public function getPaid()
        {
            echo "I am getting my salary as a developer<br>";
        
        }
    }

?>