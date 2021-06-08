<?php 

    class Book {
        public $title;
        public $category;
        public $author;

        public function __construct($title, $category, $author)
        {
            $this->title = $title;
            $this->category = $category;
            $this->author = $author;
        }

        
    }



?>