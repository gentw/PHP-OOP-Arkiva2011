<?php
namespace Bookstore\Utils;
use Exception;
trait Unique {
    // copied from Person class
    private static $lastId = 0;

    protected $id;

    public function setId($id) {
        try {
            if ($id < 0) {
                throw new Exception('ID should not be negative number'); // OR YOU CAN 'use' on top [use Exception]
            }
            // try it in init.php - passing the negative -1 as user id
            if (empty($id)) {
                $this->id = ++self::$lastId;
            } else {
                $this->id = $id;
                if ($id > self::$lastId) {
                    self::$lastId = $id;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            // YOU CAN ADD FINALLY TOO
        } finally {
            echo 'Done with try catch..'; // if id is not -1 in init.php you will see this
        }
    }

    public static function getLastId()
    {
        return self::$lastId;
    }

    public function getId()
    {
        return $this->id;
    }

}


/**
* We included the code related to IDs from Person.
* As the trait cannot be instantiated, we cannot add a constructor. Instead, we added a setId method that contains the code.
* When constructing a new instance that uses this trait, we can invoke this setId
method to set the ID based on what the user sends as an argument.

* The class Person will have to change too.
* We have to remove all references to IDs and we will have to define somehow that the class is using the trait.
* To do that, we use the keyword use, like in namespaces, but inside the class. Let's see what it would
look like:
*/