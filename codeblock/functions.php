<?php
/* ============================
            FUNCTIONS
   ============================ */
echo "==== FUNCTIONS ====<br>";

// Function declaration
$firstName = 'John';
$lastName = 'Doe';
function greetCustomer($firstName, $lastName) {
    return "Hello, $firstName $lastName! Welcome to Tech Store!<br>";
}

// Function call
echo greetCustomer($firstName, $lastName) . "<br>"; // Hello, John Doe! Welcome to Tech Store.

// Function call with named parameters (PHP 8)
echo greetCustomer(lastName: 'Smith', firstName: 'Jane') . "<br>"; // Hello, Jane Smith! Welcome to Tech Store.

// Variadic function (multiple products)
function listProducts(...$products) {
    return "Available products: " . implode(", ", $products);
}

echo listProducts('Laptop', 'Mouse', 'Keyboard') . "<br>";

// Typed parameters and typed return
function calculateTotal(float $price, int $quantity) : float {
    return $price * $quantity;
}

echo "Total price: $" . calculateTotal(299.99, 3) . "<br>";

// Nullable parameter
function welcomeCustomer(?string $name) {
    if ($name === null) return "Hello, Nathan!";
    return "Hello, $name!";
}

echo welcomeCustomer(null) . "<br>"; // Hello, Nathan!
echo welcomeCustomer('Alice') . "<br>"; // Hello, Alice!

// Union type (string or int)
function discountMessage(string|int $discount) {
    return "You have a discount of $discount" . (is_int($discount) ? "%" : "");
}

echo discountMessage(10) . "<br>";   // You have a discount of 10%
echo discountMessage("special") . "<br>"; // You have a discount of special

// Intersection type example
function countAndIterate(Iterator&Countable $items) {
    foreach($items as $item) {
        echo $item . "<br>";
    }
}

// Return mixed type - log info
function logInfo(string $message) : mixed {
    if(strlen($message) > 10) return ["status" => "long message", "text" => $message]; //returns an array
    return $message; // returns a string
}

// print_r(logInfo("New Laptop available<br>"));
// cara ini more readable di browser
$result = logInfo("New Laptop available<br>");
echo "<pre>";
print_r($result);
echo "</pre>";

// Void function (no return)
function notifyAdmin(string $message) : void {
    echo "Admin notified: $message<br>";
}

notifyAdmin("Stock for Laptop is low");

// Arrow function for quick mapping
$products = ['Laptop', 'Mouse', 'Keyboard'];
$upperProducts = array_map(fn($p) => strtoupper($p), $products);
echo "<pre>";
print_r($upperProducts);
echo "</pre>";
?>