<?php 

    include "employee.php";
    class EmployeeModel
    {
        private $empList = array(
            "garbriel@gmail.com" => array(
                "fName"=>"Gabriel", 
                "lName"=>"Courtemanche",
                "jobType"=> "Java Developer",
                "age"=> "28",
                "contactNumber"=>"1122334455",
                "email"=>"garbriel@gmail.com"
            ),
            "justin@gmail.com" => array(
                "fName"=>"Justin", 
                "lName"=>"Michela",
                "jobType"=> "JS Developer",
                "age"=> "24",
                "contactNumber"=>"1122334466",
                "email"=>"justin@gmail.com"
            ),
            "ruth@gmail.com" => array(
                "fName"=>"Ruth", 
                "lName"=>"Madrigal",
                "jobType"=> "SE Intern",
                "age"=> "26",
                "contactNumber"=>"1122334498",
                "email"=>"ruth@gmail.com"
            ),
            
        );

        public function setEmployee($emp)
        {
            $jsonDecodeNewEmployee= json_decode(json_encode($emp), true);
            $this->empList[$jsonDecodeNewEmployee['email']] = $jsonDecodeNewEmployee;
        }

        public function getEmployeeList(){
            return $this->empList;
        }
    }




?>