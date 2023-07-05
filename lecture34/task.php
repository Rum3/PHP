<?php
class Book {
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
}

class Library {
    private array $books = [];
    
    public function addBook(Book $book) {
        $this->books[] = $book;
    }
    
    public function removeBook( $isbn) {
        foreach ($this->books as $key => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$key]);
            }
        }
    }
    
    public function findBook( $isbn): ?Book {
        foreach ($this->books as $book) {
            if ($book->getIsbn() === $isbn) {
                return $book;
            }
        }
        return null;
    }
    
    public function cloneBook( $isbn): ?Book {
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
}

$library = new Library();

$book1 = new Book("Book1", "author1", 2001, "0000");
$library->addBook($book1);

$book2 = new Book("Book2", "author2", 2002, "0001");
$library->addBook($book2);

$book3 = new Book("Book4", "author3", 2003, "0002");
$library->addBook($book3);

$library->removeBook("0001");

$foundBook = $library->findBook("0000");
echo "Found Book:\n";
echo "Title: " . $foundBook->getTitle() . "\n";
echo "Author: " . $foundBook->getAuthor() . "\n";
echo "Publication Year: " . $foundBook->getPublicationYear() . "\n";
echo "ISBN: " . $foundBook->getIsbn() . "\n";

$foundBook2 = $library->findBook("0002");
echo "Found Book 2:\n";
echo "Title: " . $foundBook2->getTitle() . "\n";
echo "Author: " . $foundBook2->getAuthor() . "\n";
echo "Publication Year: " . $foundBook2->getPublicationYear() . "\n";
echo "ISBN: " . $foundBook2->getIsbn() . "\n";

$clonedBook1 = $library->cloneBook($book1->getIsbn());

echo "Cloned Book 1:\n";
echo "Title: " . $clonedBook1->getTitle() . "\n";
echo "Author: " . $clonedBook1->getAuthor() . "\n";
echo "Publication Year: " . $clonedBook1->getPublicationYear() . "\n";
echo "ISBN: " . $clonedBook1->getIsbn() . "\n";