<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
           abstract class People{
               abstract protected function prefixName($name);

           }

           class Person extends People{
               public function prefixName($name, $operator=".", $greeting="Hi"){
                   if($name == "Sandushi"){
                       $prefix = "Miss";
                   }
                   elseif($name == "Ayesh"){
                       $prefix = "Mr";
                   }
                   else{
                       $prefix ="";
                   }

                   return "{$greeting} {$prefix} {$name} <br>";
               }
           }

           $girl = new Person();
           echo $girl->prefixName("Sandushi");
           $boy = new Person();
           echo $boy->prefixName("Ayesh");

           
       ?>
       


    </body>

</html>