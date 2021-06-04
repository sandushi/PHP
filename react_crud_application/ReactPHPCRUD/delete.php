<?php

    require 'connect.php';
    $id = $_GET['id'];
    print_r($id);

    echo $sql = "DELETE FROM `students` WHERE `sId` = '{$id}' LIMIT 1";

    if(mysqli_query($con, $sql)){
        http_response_code(204);
    }

    else{
        http_response_code(422);
    }

?>