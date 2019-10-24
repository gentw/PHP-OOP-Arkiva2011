<?php

// lets require classes
require __DIR__ . '/Book.php';
require __DIR__ . '/Customer.php';

$harry_potter = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$first_customer = new Customer(123, 'Gentian', 'Nuka', 'gent@bitemybytes.com');



echo $harry_potter;
echo '<br>';
//var_dump($first_customer->firstname);

var_dump($first_customer->getFullName());
var_dump($first_customer->getEmail());
var_dump($first_customer->setEmail('sec@bitemybytes.com'));
var_dump($first_customer->getEmail());
/*
 *
 * Encapsulation - Accessors - Mutators
 *
 * Private visibility is great to maintain internal structure of you classes
 * as a developer, you can change the internal structure without affecting the
 external code (for example other classes that extends it - coming later) that
 uses it.
 * so how do we read or change these private properties or methods from outside
 or other classes?
 * we can do so using getters and setters
 * these methods are also known as accessor
 */