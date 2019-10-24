<?php
// Default Arguments
// Type Hinting

class Book
{
    //properties
    public $isbn;
    public $title;
    public $author;
    public $available;

    public function __construct($isbn, $title, $author, $available = 1)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function __toString()
    {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= '. <b style="color:red;">[Not available]</b>';
        }
        return $result;
    }

    public function getPrintableTitle()
    {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= 'Not available.';
        }
        return $result;
    }

    public function getCopy(){
        if($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}

// instantiate
$harry_potter = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');

/*
if($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
    echo 'Sorry its gonne!';
}*/
echo $harry_potter;


//var_dump($harry_potter);

