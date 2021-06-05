<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            trait message1 {
                public function msg1(){
                    echo "This is trait message 1 <br>";
                }
            }

            trait message2 {
                public function msg2(){
                    echo "This is trait message 2 <br>";
                }

            }

            class Test {
                use message1 , message2;
            }

            $object = new Test();
            $object->msg1();
            $object->msg2();
       ?>
       


    </body>

</html>