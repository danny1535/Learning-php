<?php

class Book {

    public $Title;
    public $Author;
    public $Year;

    public function __construct($Title, $Author, $Year){

        $this->Title = $Title;
        $this->Author = $Author;
        $this->Year = $Year;
    }
}


class Library {
    public $books = [];
    public function add_book($Title, $Author, $Year){
        $new_book = new Book($Title,$Author,$Year);
        $this->books[] = $new_book;
    }
    public function display_books(){
        foreach($this->books as $book){
            echo "Title: " . $book->Title . "<br>";
            echo "Author: " . $book->Author . "<br>";
            echo "Year: " . $book->Year . "<br><br>";

        }
    }
    public function search_book($title){
        foreach($this->books as $book){
            if($book->Title == $title){
                echo "Found: "
                     . $book->Title
                     . " by "
                     . $book->Author
                     . "<br>";
            }
        }
    }
    public function delete_book($title){
        foreach($this->books as $key => $book){
            if($book->Title == $title){
                unset($this->books[$key]);
                echo "$title deleted <br>";
            }
        }
    }
}


$library = new Library();

$library->add_book("1984","George Orwell",1949);
$library->add_book("Atomic Habits","James Clear",2018);

$library->search_book("1984");

$library->delete_book("1984");

$library->display_books();
?>