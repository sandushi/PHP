<?php 

    require_once "developer.php";
    require_once "manager.php";

    $developer = new Developer();
    $developer->getPaid();
    $developer->takeBreak();
    $developer->Code();

    echo "<br>";

    $manager = new Manager();
    $manager->getPaid();
    $manager->takeBreak();
    $manager->attendMeetings();
    $manager->callToClients();

?>