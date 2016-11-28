<?php
class Book {
    public $name;
    public $edition;
    public $releaseYear;
    public function __construct($name, $edition, $releaseYear)
    {
        $this->name = $name;
        $this->edition = $edition;
        $this->releaseYear = $releaseYear;
    }
}
class Model {
    public $text;
    public function __construct() {
       $this->text = 'Bókaverslun';
    }
    public function getBookList(){
        return array(
            'Fífl dagsins' => new Book ('Fífl dagsins', 'Mál og menning', '2006'),
            'Hugsjónadruslan ' => new Book ('Hugsjónadruslan', 'Mál og menning', '2014'),
            'Klisjukenndir ' => new Book ('Klisjukenndir', 'Mál og menning', '2000'),
            'Óþekkta konan' => new Book ('Óþekkta konan', 'Mál og menning', '1944')
        );
    }
    public function getBook ($name){
        $allBooks = $this -> getBookList ();
        return $allBooks [$name];
    }
}
?>