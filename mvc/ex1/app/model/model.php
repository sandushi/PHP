<?php 

include 'book.php';

class Model {

    public function getBookDetails(){
        return array(
            "abc" => new Book("abc", "Fairytale", "abc author"),
            "xyz" => new Book("xyz", "Historical", "xyz author"),
            "pqr" => new Book("pqr", "Economic", "pqr author"),
        );
    }

    public function getBook($title){
        $allBooks = $this->getBookDetails();
        return $allBooks[$title];
    }
}



?>