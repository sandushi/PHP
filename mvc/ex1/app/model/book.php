<?php 

    class Book {
        public $title;
        public $category;
        public $author;
        public $description;


        public function __construct($title, $category, $author, $description)
        {
            $this->title = $title;
            $this->category = $category;
            $this->author = $author;
            $this->description = $description;
        }

        
    }



?>