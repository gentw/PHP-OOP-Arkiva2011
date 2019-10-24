<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Customer\Basic;

// Autoloadr function to autoload classes
function autoloader($className) {
    $lastSlash = strpos($className, '\\') + 1;
    $className = substr($className, $lastSlash);
    $directory = str_replace('\\', '/', $className);
    $fileName = __DIR__ . '\\' . $directory . '.php';
    require_once $fileName;
}
spl_autoload_register('autoloader');

// check if valid
function checkIfValid(Customer $customer, $books) {
    return $customer->getAmountToBorrow() >= count($books);
}



//require_once __DIR__ . '/Domain/Book.php';
//require_once __DIR__ . '/Domain/Customer.php';

$harry_potter1 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$harry_potter2 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$harry_potter3 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$harry_potter4 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');

$first_customer = new Basic(126, 'Gentian', 'Nuka', 'gent@bitemybytes.com');
//$second_customer = new Customer(124, 'Gentrina', 'Nuka', 'nukagentrina@gmail.com');
//$third_customer = new Customer(null, 'Gex', 'Nuka', 'gex@bmb.com');

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
//var_dump(Customer::getLastId());


//var_dump($first_customer);
var_dump(checkIfValid($first_customer, [$harry_potter1, $harry_potter2, $harry_potter3, $harry_potter4]));