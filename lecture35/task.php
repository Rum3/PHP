<?php
class Book implements Serializable {
    private string $title;
    private string $author;
    private int $publicationYear;
    private string $isbn;
    
    public function __construct(string $title, string $author, int $publicationYear, string $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->isbn = $isbn;
    }
    
    public function __clone() {
        $this->isbn = uniqid();
    }
    
    public function getTitle(): string {
        return $this->title;
    }
    
    public function getAuthor(): string {
        return $this->author;
    }
    
    public function getPublicationYear(): int {
        return $this->publicationYear;
    }
    
    public function getIsbn(): string {
        return $this->isbn;
    }

    public function serialize(): string {
        return serialize([$this->title, $this->author, $this->publicationYear, $this->isbn]);
    }

    public function unserialize($serialized) {
        [$this->title, $this->author, $this->publicationYear, $this->isbn] = unserialize($serialized);
    }
}

class Library implements ArrayAccess, Countable, Serializable {
    private array $books = array();
    
    public function addBook(Book $book) {
        $this->books[] = $book;
    }
    
    public function removeBook(string $isbn) {
        foreach ($this->books as $key => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$key]);
                break;
            }
        }
    }
    
    public function findBook(string $isbn): ?Book {
        foreach ($this->books as $book) {
            if ($book->getIsbn() === $isbn) {
                return $book;
            }
        }
        return null;
    }
    
    public function cloneBook(string $isbn): ?Book {
        foreach ($this->books as $book) {
            if ($book->getIsbn() === $isbn) {
                $clonedBook = clone $book;
                $clonedBook->getIsbn();
                $this->books[] = $clonedBook;
                return $clonedBook;
            }
        }
        return null;
    }
    
    public function getAllBooks(): array {
        return $this->books;
    }

    // Implementing ArrayAccess methods
    public function offsetExists($offset) {
        return isset($this->books[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->books[$offset]) ? $this->books[$offset] : null;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->books[] = $value;
        } else {
            $this->books[$offset] = $value;
        }
    }

    public function offsetUnset($offset) {
        unset($this->books[$offset]);
    }

    // Implementing Countable method
    public function count() {
        return count($this->books);
    }

    // Implementing Serializable methods
    public function serialize() {
        return serialize($this->books);
    }

    public function unserialize($serialized) {
        $this->books = unserialize($serialized);
    }
}

$library = new Library();

$book1 = new Book("Book1", "author1", 2001, "0000");
$book2 = new Book("Book2", "author2", 2002, "0001");
$book3 = new Book("Book3", "author3",2003, "0002");

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// getAllBooks
$allBooks = $library->getAllBooks();
echo "ALL BOOKS : ";
var_dump($allBooks);

// findBook
$book = $library->findBook("0001");
echo "FIND BOOK : ";
var_dump($book);

// cloneBook
$clonedBook = $library->cloneBook("0001");
echo "CLONE BOOK : ";
var_dump($clonedBook);

// removeBook
$library->removeBook("0001");
$allBooks = $library->getAllBooks();
echo "REMOVE BOOK : ";
var_dump($allBooks);

// ArrayAccess 
$book = $library[1];
echo "ArrayAccess ";
var_dump($book);


unset($library[1]);
$allBooks = $library->getAllBooks();
echo "library after unset : ";
var_dump($allBooks);

// Countable
$count = count($library);
echo "COUNT : ";
var_dump($count);

// Serializable
$serialized = serialize($book1);
echo "serialize : ";
var_dump($serialized);

$unserialized = unserialize($serialized);
echo "unserialize : ";
var_dump($unserialized);
