<?php

    include 'logger.php';
    include 'user.php';


    $logger = new Logger();
    $user = new User($logger);

    $user->create(array());


?>