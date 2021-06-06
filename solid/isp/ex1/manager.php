<?php 

    require_once "worker.php";
    require_once "caller.php";


    class Manager implements Worker, Caller{
        public function callToClients(){
            echo "I am calling to clients as a Manager<br>";
        }
        public function attendMeetings(){
            echo "I am attending to meetings as a Manager<br>";
        }

        public function takeBreak()
        {
            echo "I am taking break as Manager<br>";
        }

        public function getPaid()
        {
            echo "I am getting my salary as a Manager<br>";
        }
    }

?>