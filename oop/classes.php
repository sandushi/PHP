<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>
        </title>
    </head>

    <body>
      
            
        <?php  
            class Book{
                var $title;
                var $author;
                var $pages;

                function __construct($aTitle, $aAuthor, $aPages){
                   $this->title = $aTitle;
                   $this->author = $aAuthor;
                   $this->pages = $aPages;
                }

            }

            $book1 = new Book("Harry Potter","JK ROwling",400);
            $book2 = new Book("Harry Potter2","JK ROwling",800);
         

            echo $book1->title;
            echo $book2->title;
       ?>
       


    </body>

</html>