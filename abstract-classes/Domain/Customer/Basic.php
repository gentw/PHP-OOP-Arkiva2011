<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Basic extends Customer {

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

}

