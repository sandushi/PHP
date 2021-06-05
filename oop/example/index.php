<?php 
    include 'includes/autoloader.inc.php';
        
    // echo "Person 1 <br>";
    // $sandushi = new Person("Sandushi", "Dileka", "f");
    // echo $sandushi->sayHello() . " and gender is " . $sandushi->getGender(). "<br>";
    // echo $sandushi->message();
    // echo "<br><br>";

    // echo " Person 2 <br>";
    // $ayesh = new Person("Ayesh", "Chathuradha", "m");
    // echo $ayesh->sayHello() . " and gender is " . $ayesh->getGender(). "<br>";
    // echo $ayesh->message();
    // echo "<br><br>";

    echo "Employee 1 <br>";
    $employee1 = new Employee("Sandushi","Dileka","backend Developer");
    echo $employee1->sayHello() . " and gender is " . $employee1->getGender(). "<br>";
    echo $employee1->message();
    echo "current job : " . $employee1->getJobTitle() . "<br>";

    $employee1->setJobTitle("front end Developer");
    echo "Changed job : {$employee1->getJobTitle()} <br>";
    echo "I am working at " . Employee :: COMPANY_NAME  . "<br>";
    echo "There are " . Employee :: $employeeNumber . " are working in my company <br>";
    echo "Blood group from person class is {$employee1->getBloodGroup()} <br>";

    echo "Prefix is {$employee1->prefix()} <br>";
    echo "<br><br>"
            
?>
       

