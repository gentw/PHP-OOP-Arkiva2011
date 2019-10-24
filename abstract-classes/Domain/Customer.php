<?php

namespace Bookstore\Domain;

abstract class Customer extends Person
{
    private static $lastId = 0;

    private $id;
//    private $firstname;
//    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {

        parent::__construct($firstname, $surname);

        // access static property 'self::propertyName'

        if($id == null) {
            $this->id = ++self::$lastId;
        } else {
            $this->id = $id;
            if($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
        $this->id = $id;
        //$this->firstname = $firstname;
        //$this->surname = $surname;
        $this->email = $email;
    }

    // abstract methods
    abstract public function getMonthlyFee();
    abstract public function getAmountToBorrow();
    abstract public function getType();

    public static function getLastId() {
        return self::$lastId;
    }

    // getters or accessors
//    public function getFirstName(){
//        return $this->firstname;
//    }
//
//    public function getSurname(){
//        return $this->surname;
//    }

    public function getFullName(){
        return strtoupper($this->firstname . ' ' . $this->surname);
    }

    public function getEmail() {
        return $this->email;
    }

    //setters or mutators
    public function setEmail($email){
        $this->email = $email;
    }
}
