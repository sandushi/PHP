<?php 

include 'book.php';

class Model {



    private $bookArray = array(
        "Harry" => array(
                "title"=> "Harry",
                "category"=> "Fantasy novel",
                "author" => " J. K. Rowling. ",
                "description"=>"Harry Potter is a film series based on the eponymous novels by J. K. Rowling. The series is distributed by Warner Bros. and consists of eight fantasy films, beginning with Harry Potter and the Philosopher's Stone (2001) and culminating with Harry Potter and the Deathly Hallows – Part 2 (2011)"
        ),
        "Sleeping Beauty" => array(
            "title"=> "Sleeping Beauty",
                "category"=> "Fairy",
                "author" => "German authour",
                "description"=>"The Sleeping Beauty in the Woods, is a classic fairy tale about a princess who is cursed to sleep for a hundred years by an evil fairy, to be awakened by a handsome prince at the end of them. The good fairy, realizing that the princess would be frightened if alone when she awakens, uses her wand to put every living person and animal in the palace asleep, to awaken when the princess does"
        ),
        "Grant" => array(
            "title"=> "Grant",
                "category"=> "Historical",
                "author" => " Ron Chernow",
                "description"=>"Pulitzer Prize winner Ron Chernow returns with a sweeping and dramatic portrait of one of our most compelling generals and presidents, Ulysses S. Grant. With lucidity, breadth, and meticulousness, Chernow finds the threads that bind Grant's disparate stories together, shedding new light on the man whom Walt Whitman described as nothing heroic...and yet the greatest hero"
        ),
        );
    

    public function getBookDetails(){
        return $this->bookArray;

    }

    public function createBook($title, $category, $author,$description)

    {   
        $newBook = new Book($title, $category,$author,$description);
        $jsonDecodeNewBook = json_decode(json_encode($newBook), true);
        $this->bookArray[$title] = $jsonDecodeNewBook;

    }

    public function getBook($title){
        $allBooks = $this->getBookDetails();
        return $allBooks[$title];
    }
}



?>