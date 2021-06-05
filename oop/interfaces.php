
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            interface Animal{
                public function makeSound();
                public function makeAction();
            }

            class Dog implements Animal{
                public function makeSound(){
                    echo "Bark<br>";
                }

                public function makeAction(){
                    echo "Dog run<br>";
                }
            }

            class Cat implements Animal{
                public function makeSound(){
                    echo "Meow<br>";
                }

                public function makeAction(){
                    echo "Cat sleep<br>";
                }
            }

            class Bird implements Animal{
                public function makeSound(){
                    echo "sss<br>";
                }

                public function makeAction(){
                    echo "Bird fly<br>";
                }
            }

            $dog = new Dog();
            $dog->makeAction();
            $dog->makeSound();
            echo "<br>";

            $cat = new Cat();
            $cat->makeAction();
            $cat->makeSound();
            echo "<br>";

            $bird = new Bird();
            $bird->makeAction();
            $bird->makeSound();
            echo "<br>";
       ?>
       


    </body>

</html>