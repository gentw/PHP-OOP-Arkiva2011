<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;


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

function processPayment(Customer $customer, float $amount) {
    if($customer->isExtentOfTaxes()) {
        return $customer->isExtentOfTaxes();
    } else {
        $amount *=1.50;
    }
    $customer->pay($amount);
}




//require_once __DIR__ . '/Domain/Book.php';
//require_once __DIR__ . '/Domain/Customer.php';

$harry_potter1 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
/*$harry_potter2 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$harry_potter3 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');
$harry_potter4 = new Book(123456789, 'Harry potter and the magicians', 'Ryan Duhngel');*/

$basic_customer = new Basic(126, 'Gentian', 'Nuka', 'gent@bitemybytes.com');
$premium_customer = new Premium(null, "Michael", "Jackson", "mj@gmail.com");
/*var_dump(checkIfValid($basic_customer, [$harry_potter1]));
var_dump($basic_customer->getType()); // ADDED JUST TO SHOW SOME TEXT ON SCREEN
var_dump($basic_customer->getFirstname());
// once Customer implements another interface 'Payer'
var_dump($basic_customer->pay(1000.00));
var_dump($basic_customer->isExtentOfTaxes());

echo '<br>';

$premium_customer = new Premium(null, "Michael", "Jackson", "mj@gmail.com");
var_dump($premium_customer->isExtentOfTaxes());*/


var_dump(processPayment($basic_customer, 10));
var_dump(processPayment($premium_customer, 10));


var_dump($basic_customer instanceof Basic); // true
var_dump($premium_customer instanceof Premium); // true

var_dump($basic_customer instanceof Premium); // false
var_dump($premium_customer instanceof Basic); // false



/***
 * Interfaces
 *
 * An interface is an OOP element that groups a set of function declarations
 without implementing them.
 * Interfaces are different from abstract classes, since they cannot contain any
 implementation at all whereas abstract classes could mix both method
 definitions and implemented ones.
 * Interface cannot contain any properties of functions so lets move the code
 from customer to person class leaving only this left in
 * From the developer's point of view, using a class that implements an
 interface is like writing contract:
 * you ensure that your class will always have the methods declared in the
 interface, regardless of the implementation.
 */