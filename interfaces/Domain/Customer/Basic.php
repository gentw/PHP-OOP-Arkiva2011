<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

class Basic extends Person implements Customer {

    // lets add more methods
    public function getMonthlyFee() {
        return 5.0;
    }

    public function getAmountToBorrow() {
        return 4;
    }

    public function getType() {
        return 'Basic';
    }

    public function pay(float $amount) {
        return "Paying $amount";
    }

    public function isExtentOfTaxes()
    {
        return 'You gotta pay tax mate!';
    }

}

