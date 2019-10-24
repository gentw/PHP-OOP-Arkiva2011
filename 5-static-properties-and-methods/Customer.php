<?php
class Customer
{
    private static $lastId = 0;

    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
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
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }

    public static function getLastId() {
        return self::$lastId;
    }

    // getters or accessors
    public function getFirstName(){
        return $this->firstname;
    }

    public function getSurname(){
        return $this->surname;
    }

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
