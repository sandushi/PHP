<?php

    class Employee
    {
        public $fName;
        public $lName;
        public $jobType;
        public $age;
        public $contactNumber;
        public $email;

        public function __construct($fName,$lName,$jobType, $age, $contactNumber,$email)
        {
            $this->fName = $fName;
            $this->lName = $lName;
            $this->jobType = $jobType;
            $this->age = $age;
            $this->contactNumber = $contactNumber;
            $this->email = $email;
        }



    }



?>