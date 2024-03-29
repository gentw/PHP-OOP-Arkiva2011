<?php

namespace Bookstore\Domain;

interface Customer extends Payer
{


    // abstract methods
    public function getMonthlyFee();
    public function getAmountToBorrow();
    public function getType();



    // getters or accessors
//    public function getFirstName(){
//        return $this->firstname;
//    }
//
//    public function getSurname(){
//        return $this->surname;
//    }


}


// Note that an interface is very similar to an abstract class.
// The differences are that it is defined with the keyword interface, and that its methods do not have the word abstract.
// Interfaces  cannot be instantiated, since their methods are not implemented as same as with abstract classes.
// The only thing you can do with them is make a class to implement them.
// From the developer's point of view, using a class that implements an interface is like writing a contract:
// you ensure that your class will always have the methods declared in the interface, regardless of the implementation.
// Because of that, interfaces only care about public methods, which are the ones that other developers can use.
// The only change you need to make in your code is to replace the keywords extends by implements:
// class Basic implements Customer { ... }