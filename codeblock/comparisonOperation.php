<?php
/* ============================
        COMPARISON OPERATION
   ============================ */
echo "<b>==== COMPARISON OPERATION ====</b><br>";

// Example variables for a tech store
$stock = 10;
$discount = 5;
$isMember = true;
$customerName = null;
$price = 100;
$inStock = true;
$hasCoupon = false;
$isAvailable = true;
$category = 'laptop';

// AND (&&)
if ($stock === 10 && $discount === 5) {
    echo "There are 10 items and a 5% discount is available<br>";
}

// OR (||)
if ($stock === 10 || $discount === 5) {
    echo "Either there are 10 items or a 5% discount is available<br>";

// One line
if ($isMember) return true;

// Null check
if (is_null($customerName)) {
    echo 'Customer name not provided';
}
}

// Comparison operations
var_dump($price == 100);  // equal, no type check
var_dump($price === 100); // equal with type check
var_dump($price != 200);  // not equal
var_dump($stock > 0);     // greater than
var_dump($stock < 5);     // less than
var_dump($inStock && $isMember); // and
var_dump($inStock || $hasCoupon); // or

// Ternary operator (true : false)
echo $isAvailable ? 'Product available' : 'Out of stock';

// Null Coalesce Operator
echo $customerName ?? 'Guest';  // output 'Guest' if $customerName is null

// Null Coalesce Assignment
$customerName ??= 'Guest';

// Null Safe Operator (PHP 8) will return null if one ? is null
$customer = null;
echo $customer?->order?->paymentStatus;

// Null Safe + Null Coalesce
echo $customer?->order?->paymentStatus ?? 'Not paid';

// Spaceship operator return -1, 0, or 1
$products = ['Laptop', 'Mouse', 'Phone'];
usort($products, function($a, $b) {
    return $a <=> $b;
});
print_r($products);
// ['Laptop', 'Mouse', 'Phone'] (alphabetical)

// Return false when converted as boolean
// false, 0, 0.0, null, unset($var), '0', '', [];

// Compare same variable with multiple values
switch ($category) {
    case 'laptop':
        echo 'You selected Laptop';
        break;
    case 'phone':
        echo 'You selected Phone';
        break;
    case 'tablet':
        echo 'You selected Tablet';
        break;
    default:
        echo 'Unknown category';
}

    // Match Expression (PHP 8)
    $label = match($category) {
        'laptop' => 'Electronics',
        'phone', 'tablet' => 'Mobile Devices',
        'accessory' => 'Peripherals',
        default => 'Unknown'
    };
    echo $label;

    // Check if variable declared
    $productsStock = ['laptop' => 5, 'phone' => 12];
    var_dump(isset($productsStock['laptop']));  # true
?>