<?php

namespace Bookstore\Domain;
//use trait
use Bookstore\Utils\Unique;

class Person {

    // using the trait for id assignment - comment out the code below
    use Unique;

    protected $firstname;
    protected $surname;

//    private static $lastId = 0;
//
//    private $id;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {

        //parent::__construct($firstname, $surname);

        // access static property 'self::propertyName'

        /*if($id == null) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if($id > self::$lastId) {
                self::$lastId = $id;
            }
        }*/
        //$this->id = $id;
        $this->setId($id);
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    // methods

    /*public static function getLastId() {
        return self::$lastId;
    }*/

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getFullName()
    {
        return strtoupper($this->firstname . ' ' . $this->surname);
    }

    public function getEmail()
    {
        return $this->email;
    }

    //setters or mutators
    public function setEmail($email)
    {
        $this->email = $email;
    }


}