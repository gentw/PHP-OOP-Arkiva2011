<?php

namespace Bookstore\Domain;

class Person {
    protected $firstname;
    protected $surname;

    public function __construct($firstname, $surname)
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }

    // methods
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getSurname()
    {
        return $this->surname;
    }


}