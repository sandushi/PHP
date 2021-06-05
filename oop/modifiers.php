<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php



        class Mango{
               public $name; //access from everywhere
               protected $color; //access from same class and sub classes
               private $weight; // access from this class only

               public function setName($name){
                   $this->name = $name;
               }

               public function setColor($color){
                   $this->color = $color;
               }

               private function setWeight($weight){
                   $this->weight = $weight;
               }

           }

           $fruit = new Mango;
           $fruit->setName("Milat");
           echo $fruit->name;
           $fruit->setColor("yellow");
           //$fruit->setWeight("500g"); ---> gives an error
           //echo $fruit->color ---> gives an Error
           //echo $fruit->weight ---> gives an Error





            
       ?>
       


    </body>

</html>