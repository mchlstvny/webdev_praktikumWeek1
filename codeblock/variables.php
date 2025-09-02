<?php
/* ============================
            VARIABLES
   ============================ */

echo "<b>==== VARIABLES ====</b><br>";

$custName = "John"; //string
$isLoggedIn = true; //boolean
$cartItems = 3; //integer
$totalPrice = 300.75; //float
$wishlist = ["Laptop", "Keyboard", "Mouse"]; //array

const MAX_CART_ITEMS = 10; //constant
define('STORE_NAME', 'Tech Store'); //constant

echo "Welcome to " . STORE_NAME . "!<br>";
echo "Hello, $custName!<br>";

if($isLoggedIn) {
    echo "You are logged in.<br>";
} else {
    echo "Please log in to continue.<br>";
}

echo "You have $cartItems items in your cart worth $$totalPrice.<br>";
echo "Max cart items allowed: " . MAX_CART_ITEMS . "<br>";
echo "Wishlist items: " . implode(", ", $wishlist) . "<br><br>";

// Type conversion
// Example: convert discount code input (string) into integer percentage
$discountCode = "15"; 
$discountPercent = (int)$discountCode; 

echo "Your discount code gives you $discountPercent% off.<br>";

// Type checks
echo "Type of cartItems: " . gettype($cartItems) . "<br>";   // int
echo "Is totalPrice a float? " . is_float($totalPrice)  . "<br>";
echo "Is custName a string? " . is_string($custName). "<br>";
echo "Is isLoggedIn a boolean? " . is_bool($isLoggedIn) . "<br>";
?>
