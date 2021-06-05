<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>

        <?php 

            include 'includes/person.inc.php';
            
            $pet01 = new Person();
            echo $pet01->first;
        ?>
    </body>
</html>