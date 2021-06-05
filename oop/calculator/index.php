<?php

    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
        <form action="includes/calc.inc.php" method="post">
            <p>My Simple Calculator</p>
            <input type="number" name="num1" placeholder="First Number">
            <select name="operation">
                <option value = "add">Addition</option>
                <option value = "sub">Subtraction</option>
                <option value = "mul">Multiplication</option>
                <option value = "div">Division</option>
            </select>
            <input type="number" name="num2" placeholder="Second Number">
            <button type="submit" name="submit">Calculate</button>

        </form>
       


    </body>

</html>
