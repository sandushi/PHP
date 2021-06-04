<!DOCTYPE html>
<html>
<body>

<h1>My numbers PHP page</h1>

<?php
  
    $x = 1000;
    $y = 50;
    $z = -100;
    $a = 9.567;

    echo "x is $x <br>";
    echo "y is $y <br>";
    echo "z is $z <br>";
    echo "a is $a <br>";
    echo  "sum is " . $x + $y . "<br>";
    echo  "difference is " . $x - $y . "<br>";
    echo  "divide is " . $x / $y . "<br>";  
    echo  "multiply is " . $x + $y . "<br>";
    echo  "min is ". min($x, $y) ."<br>";
    echo  "max is ". max($x, $y) ."<br>";
    echo  "sqrt of x is ". sqrt($x) ."<br>";
    echo  "abs of z is ". abs($z) ."<br>";  
    echo  "round of a is ". round($a) ."<br>";
    

    echo "<br><br><br>";





    


?>

</body>
</html>