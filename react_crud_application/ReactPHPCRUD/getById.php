<?php

    require 'connect.php';

    $id = $_GET['id'];

    //print_r($id);

    $sql = "SELECT * FROM `students` WHERE `sId` = '{$id}' LIMIT 1";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    echo $json = json_encode($row);


   // echo json_encode(['data'=>$json]);

    exit;


?>