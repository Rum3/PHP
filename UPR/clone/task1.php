<?php 
class Book {
    private $tittle;
    private $author;
    private $publicationYear;
    private $isbn;

    public function __construct($title, $author, $publicationYear , $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
    }

    public function __clone() {
        
    }

    public function getTitle() {
        return $this->tittle;
    }

    public function getAuthor() {
        return $this->author;
    }
    
    public function getpublicationYear() {
        return $this->publicationYear;
    }

    public function getIsbn() {
        return $this->isbn;
    }
}

class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books = $book;
    }

    public function removeBook($isbn) {

    }

    public function findBook(string $isbn) {

    }

    public function cloneBook(string $isbn) {
        
    }
}