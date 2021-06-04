<!DOCTYPE html>
<html>
<body>

<h1>My Strings PHP page</h1>

<?php
    //String variable
    $name = "Sandushi Dileka";
    

    echo strlen($name) ; //Length of a String
    echo "<br>";
    echo str_word_count($name); //Count Words in a String
    echo "<br>";
    echo strrev($name); //Reverse the string
    echo "<br>";
    echo str_replace("Sandushi", "Pamudi", $name); //replace a word in a String

?>

</body>
</html>