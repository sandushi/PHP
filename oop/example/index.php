<?php 
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
      
            
        <?php  

            $person = new Person("Sandushi", 25);
            $person->info();
            
       ?>
       


    </body>

</html>