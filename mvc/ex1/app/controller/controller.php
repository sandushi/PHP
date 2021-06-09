<?php 

include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/model/model.php');

class Controller 
{
    private $model ;

    public function __construct__()
    {
        $this->model = new Model();
    }

    public function invoke()

    {

        if(isset($_GET['book'])){
           // echo $_GET['book'];
            $book = $this->model->getBook($_GET['book']);
            include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/view/viewBook.php');
        }    
        else
        {
            $books = $this->model->getBookDetails();
            include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/view/bookList.php');
        }
        
    }

}


?>