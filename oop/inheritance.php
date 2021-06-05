
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php

            
            class Fruit {
                public $name;
                public $color;
                private $weight;

                public function __construct($name, $color, $weight){
                    $this->name = $name;
                    $this-> color = $color;
                    $this->setWeight($weight);
                }

                protected function setWeight($weight){
                    $this->weight = $weight;
                }

                public function intro(){
                    echo "This fruit is a " . $this->name . " and color is " . $this->color . " .<br>";
                }
               

            }

            class Apple extends Fruit{

                public $price;

                public function __construct($name, $color, $weight, $price){
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
                    $this->price = $price;

                }
                public function intro(){
                    echo "This apple is a " . $this->name . " and color is " . $this->color . " and it is " . $this->price . "<br>";
                }
            } 

            $apple = new Apple("green apple","green",500, 30);
            $apple->intro();

            $fruit = new Fruit("Mango","yellow",200);
            $fruit->intro();

       ?>
       


    </body>

</html>