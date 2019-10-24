<?php
class Book
{
    //properties
    public $isbn;
    public $title;
    public $author;
    public $available;

    // methods are functions
    public function getPrintableTitle()
    {
        $result = $this->title . ' by ' . $this->author;
        if (!$this->available) {
            $result .= 'Not available.';
        }
        return $result;
    }

    // another method
    public function getCopy(){
        if($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }


}

$harry_potter = new Book();
$harry_potter->isbn = 123456789;
$harry_potter->title = 'Harry Potter and the magicians';
$harry_potter->author = 'Rayn Dhungel';
$harry_potter->available = 10;

if($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
    echo 'Sorry its gonne!';
}

var_dump($harry_potter);

