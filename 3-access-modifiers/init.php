<?php

// lets require classes
require __DIR__ . '/Book.php';
require __DIR__ . '/Customer.php';

$harry_potter = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$first_customer = new Customer(123, 'Gentian', 'Nuka', 'gent@bitemybytes.com');



echo $harry_potter;
echo '<br>';
//var_dump($first_customer->firstname);