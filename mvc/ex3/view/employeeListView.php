<?php 

    
    class EmployeeListView 
    {
        public $controller;

        public function __construct($controller)
        {
            $this->controller = $controller;
        }

        public function input($emp)
        {
            $this->controller->setData($emp);
        }


        public function output()
        {
            $results = $this->controller->getData();

            echo "<h2> Employee List </h2>
                  <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Job Type</th>
                        <th>Age</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                    </tr> ";

            foreach($results as $result)
                {
                  echo "<tr>
                        <td>$result[fName]</td>   
                        <td>$result[lName]</td>   
                        <td>$result[jobType]</td>   
                        <td>$result[age]</td>   
                        <td>$result[contactNumber]</td>   
                        <td>$result[email]</td>   
                        </tr> " ;
                
                
                }

            
        }
    }



?>