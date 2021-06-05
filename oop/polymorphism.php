<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            interface Shape{
                public function calArea();
            }

            class Circle implements Shape{
                private $radius;

                public function __construct($radius){
                    $this->radius = $radius;
                }
                
                public function calArea(){
                    return $this -> radius * $this -> radius * pi();
                }
            }

            class Rectangle implements Shape{
                private $width;
                private $length;

                public function __construct($width, $length){
                    $this->width = $width;
                    $this->length = $length;
                }
               
                public function calArea()
                {
                    return $this -> width * $this -> length;
                }
            }


            $circle = new Circle(3);
            echo "The area of the circle is {$circle->calArea()} <br>";
            $rect = new Rectangle(3,4);
            echo "The area of the rectangle is {$rect->calArea()} <br>";
       ?>
       


    </body>

</html>