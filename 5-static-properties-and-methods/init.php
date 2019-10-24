<?php
// lets require classes
require __DIR__ . '/Book.php';
require __DIR__ . '/Customer.php';

$harry_potter = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$first_customer = new Customer(null, 'Gentian', 'Nuka', 'gent@bitemybytes.com');
$second_customer = new Customer(124, 'Gentrina', 'Nuka', 'nukagentrina@gmail.com');
$third_customer = new Customer(null, 'Gex', 'Nuka', 'gex@bmb.com');

//echo $harry_potter;
//echo '<br>';
//var_dump($first_customer->firstname);

//var_dump($first_customer->getFullName());
//var_dump($first_customer->getEmail());
//var_dump($first_customer->setEmail('sec@bitemybytes.com'));
//var_dump($first_customer->getEmail());

// reference it using existing instance
//var_dump($first_customer::getLastId());

// reference it using class name itself
var_dump(Customer::getLastId());


/***
 * Static Properties and Methods
 *
 * So far all the properties and methods were linked to a specific instance
 * two different instances could have two different values for the same properties
 *
 * PHP allows you to have multiple properties and methods linked to the class
 * itself rather than to the object.
*/