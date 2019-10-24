<?php
// Default Arguments
// Type Hinting
namespace Bookstore\Domain;
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
            $result .= '. [Not available]';
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