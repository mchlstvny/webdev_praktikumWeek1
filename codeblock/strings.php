<?php
/* ============================
            STRINGS
   ============================ */

echo "<b>==== STRINGS ====</b><br><br>";

// String can use single quote
$custName = 'John';
// or double quote
$custName = "John";

// Double quote string can escape characters \n = new line  \t = tab  \\ = backslash
echo "Welcome to Tech Store, $custName!\nThank you for shopping with us.\n";

// Double quote string can do interpolation
echo "Hello $custName<br>";

// string concat
echo 'Hello ' . $custName . ', enjoy your shopping!<br>';

// string length
echo "Your name has " . strlen($custName) . " characters.<br>";

// Remove space(s) before and after
$text = "   Discount Coupon   ";
echo "Before trim: '$text'<br>";
echo "After trim: '" . trim($text) . "'<br>";

// Convert to lowercase / uppercase
$email = "CustomerSupport@TechStore.com";
echo "Lowercase email: " . strtolower($email) . "<br>";
echo "Uppercase name: " . strtoupper($custName) . "<br>";

// Converts the first character to uppercase
$product = "laptop";
echo "Product name: " . ucfirst($product) . "<br>";  // Laptop

// Replace text a by text b in $text
$orderText = "Your order has been canceled";
echo str_replace("canceled", "confirmed", $orderText) . "<br>"; // Your order has been confirmed

// String Contains (PHP 8)
echo "Does '$custName' contain 'oh'? ";
echo str_contains($custName, "oh") ? "Yes<br>" : "No<br>";

// Find numeric position of first occurrence 
$pos = strpos($custName, "o"); 
echo "The first 'o' in $custName is at position $pos<br>";

// Returns portion of string (offset / length)
echo "First part of your name: " . substr($custName, 0, $pos) . "<br>"; 
?>
