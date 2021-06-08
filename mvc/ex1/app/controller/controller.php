<?php 

include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/model/model.php');

class Controller {
    public $model ;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if(!isset($_GET['book'])){
            $books = $this->model->getBookDetails();
            include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/view/bookList.php');
        }
        else{
            $book = $this->model->getBook($_GET['book']);
            include($_SERVER['DOCUMENT_ROOT'].'/mvc/ex1/app/view/viewBook.php');
        }
    }
}


?>