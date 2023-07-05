<?php
// Напишете клас "BookCollection", който да имплементира ArrayAccess интерфейса.
//  В този клас трябва да има единствено едно поле - масив от книги.
// Да се добави метод "addBook", който да приема като аргумент книга и да я добавя към край на масива от книги.
// Да се добави метод "getBooks", който да връща масива от книги.
// След това да се създаде обект от тип "BookCollection" и да се добавят няколко книги чрез метода "addBook". 
// Да се достъпят книгите в масива чрез ArrayAccess интерфейса и да се изведат на екрана.

class BookCollection implements ArrayAccess {
    private $books = [];

    public function addBook($books) {
        $this->books[] = $books;
    }

    public function getBook(){
        return $this->books;
    }

    public function offsetExists($offset) {
        return isset($this->books[$offset]);
    }
    public function offsetGet($offset) {
        return $this->books[$offset];
    }

    public function offsetSet($offset, $value) {
        if ($offset === null) {
            $this->books[] = $value;
        } else {
            $this->books[$offset] = $value;
        }
    }

    public function offsetUnset($offset) {
        unset($this->books[$offset]);
}
}

$BookCollection = new BookCollection();

$BookCollection->addBook("book1");
$BookCollection->addBook("book2");

echo $BookCollection[0]."\n";
echo $BookCollection[1];