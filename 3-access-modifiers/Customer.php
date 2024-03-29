<?php
/*
 * PRIVATE
 * The private visibility means that the properties and methods of the class
 * can not be accessed by outside.
 *
 * PROTECTED
 * The protected visibility means that the properties and methods of the class
 * can be accessed only by its children.
 *
 * PUBLIC
 * public visibility means that the properties and methods of the class
 * can be accessed by outside.
 */
class Customer
{
    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __construct($id, $firstname, $surname, $email)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }
}

