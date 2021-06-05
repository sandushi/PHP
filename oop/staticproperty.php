<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            class ParentClass {
                public static $value = 3;
            }

            class Child1 extends ParentClass{
                public function increment(){
                    parent :: $value++;
                }
            }

            class Child2 extends ParentClass{
                public function increment(){
                    parent :: $value++;
                }
            }

            $object1 = new Child1();
            $object1->increment();
            echo ParentClass :: $value;
            echo "<br>";
            $object2 = new Child2();
            echo $object2->increment();
            echo ParentClass :: $value;

       ?>
       


    </body>

</html>