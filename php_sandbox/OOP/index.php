<?php
// Create a class
class Person {
    private $name;
    private $email;

    // Static property
    public static $ageLimit = 40;

    // Create a constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__.' created<br>';
    }

    public function __destruct()
    {
        echo 'Person destructed';
    }

    // Static function
    public static function getAgeLimit() {
        return self::$ageLimit;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

// Instantiate person
$person1 = new Person('John Doe', 'test@test.nl');

//$person1->setName('John Doe');
//
//echo $person1->getName();

var_dump($person1);

// Inherit from other class
class Customer extends Person {
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email);
        $this->balance = $balance;
    }
}

$customer1 = new Customer('Joanna Doe', 'test@test.nl', 5000);

var_dump($customer1);

// Static property can be called without creating an instance
echo Person::$ageLimit;

// Call static function
echo Person::getAgeLimit();