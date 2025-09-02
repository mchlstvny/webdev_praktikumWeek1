<?php
/* ============================
              OOP
   ============================ */
echo "==== OOP ==== <br>";

// Base class
class Person {
    protected $firstName;
    protected $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}

// Constructor property promotion + readonly properties (PHP 8.1)
class Staff {
    public function __construct(
        public readonly string $firstName, 
        public readonly string $lastName, 
        public string $role
    ) {}
}

// Customer inherits Person
class Customer extends Person {
    private $membership;

    public function __construct($firstName, $lastName, $membership) {
        parent::__construct($firstName, $lastName);
        $this->membership = $membership;
    }

    // Override method to include membership
    public function getFullName() {
        return parent::getFullName() . " (" . $this->membership . ")";
    }
}

// Static method example
class Greeting {
    public static function welcome($name) {
        echo "Welcome, $name!<br>";
    }
}

// Static constant
class Store {
    const MAX_CUSTOMERS = 100;
}

// Interface
interface ProductInterface {
    public function getPrice(): float;
}

// Trait
trait Logger {
    public function log($message) {
        echo "Log: $message<br>";
    }
}

// Product class using trait and implementing interface
class Product implements ProductInterface {
    use Logger;

    public function __construct(public string $name, public float $price) {}

    public function getPrice(): float {
        return $this->price;
    }
}

// Static factory method
class Connection {
    public static function create($host) {
        return new self($host);
    }

    public function __construct(private string $host) {}

    public function getHost() {
        return $this->host;
    }
}

// Demo objects
$customer1 = new Customer('John', 'Doe', 'Gold');
$customer2 = new Customer('Alice', 'Smith', 'Silver');

echo "Customer 1: " . $customer1->getFullName() . "<br>";
echo "Customer 2: " . $customer2->getFullName() . "<br>";

// Staff demo
$staff = new Staff('Nathan', 'Taylor', 'Manager');
echo "Staff: {$staff->firstName} {$staff->lastName} - Role: {$staff->role}<br>";

// Static method call
Greeting::welcome($customer1->getFullName());

// Static constant
echo "Max customers allowed: " . Store::MAX_CUSTOMERS . "<br>";

// Product demo
$product1 = new Product('Laptop', 999.99);
$product2 = new Product('Mouse', 49.99);

$product1->log("Product created: {$product1->name} - {$product1->price}");
$product2->log("Product created: {$product2->name} - {$product2->price}");

echo "Product 1 price: $" . $product1->getPrice() . "<br>";

// Static factory usage
$conn = Connection::create('localhost');
echo "Connected to host: " . $conn->getHost() . "<br>";
?>
