<?php 

require 'connect.php';

// print_r($_POST);

    $postdata = file_get_contents("php://input");
    // $request = json_decode($postdata);

    if(isset($postdata) && !empty($postdata)){
        $request = json_decode($postdata);

        print_r($request);
        //Sanitize

        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $email = $request->email;

        //store

        $sql = "INSERT INTO `students` (
            `fName`,
            `lName`,
            `email`
            ) VALUES 
            (
                '{$firstName}',
                '{$lastName}',
                '{$email}'
            )";

            if(mysqli_query($con, $sql)){
                http_response_code(201);
            }
            else{
                http_response_code(422);
            }
    }



?>