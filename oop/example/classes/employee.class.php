<?php 

    class Employee extends Person{

        //constants in a class
        const COMPANY_NAME = "Rhino partners";
        
        //static keyword
        public static $employeeNumber = 100;

        //access  modifier private
        private $jobTitle;
        
        public function __construct($firstName, $lastName,$jobTitle, $gender='f'){
            $this->setJobTitle($jobTitle);

            parent :: __construct($firstName, $lastName, $gender);
        }

        //getter of private variable jobTitle
        public function setJobTitle($jobTitle){
            $this->jobTitle = ucfirst($jobTitle);
        }
        
        //setter of private variable jobTitle
        public function getJobTitle(){
            return $this->jobTitle;
        }

        //override the message method in Person class
        public function message(){
            return "I have a job <br>";
        }

        //get the parent static keyword
        public function getBloodGroup(){
            return parent :: $bloodGroup;
        }

        //implement the abstract method of the parent class
        public function prefix()
        {
            if($this->gender == "m"){
                return "Mr.";
            }
            else {
                return "Miss.";
            }
        }

    }


?>