<?php

    include 'show.php';
    include 'calculate.php';

    $show = new Show();

    $cal = new Calculate(4, 5, $show);
    $cal->calculateResult("add");

    $cal = new Calculate(4, 5, $show);
    $cal->calculateResult("mul");

?>