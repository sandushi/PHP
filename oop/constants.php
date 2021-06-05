<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            class Hello {
                const HELLO_MESSAGE = "Hello! How are you? <br>";

                public function helloFunc(){
                    echo self :: HELLO_MESSAGE;
                }
            }

            echo Hello :: HELLO_MESSAGE; //constant without creating an object;

            $msg = new Hello();
            $msg->helloFunc();
       ?>
       


    </body>

</html>