<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            class Fruit{
                public $name;
                public $color;

                public function __construct($name, $color){
                   $this->name = $name;
                   $this->color = $color;
                }

                public function sayHi(){
                    echo "Hii from " . $this->name . "<br>"; 
                }

                //this function is execute at the last of the object execution
                public function __destruct()
                {
                    echo "The fruit ". $this->name . " is " . $this->color . " color. <br>";
                }

            }

            $fruit1 = new Fruit("Apple", "red");
            $fruit2 = new Fruit("Orange", "orange");
            $fruit3 = new Fruit("Mango", "green");
            $fruit1->sayHi();
            $fruit3->sayHi();
            $fruit2->sayHi();

           
       ?>


       


    </body>

</html>