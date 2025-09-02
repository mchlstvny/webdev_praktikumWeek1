<?php
/* ============================
       ERROR HANDLING
   ============================ */
echo "<b>==== ERROR HANDLING ====</b><br>";

$products = ['Laptop', 'Mouse', 'Keyboard'];

// Function to check product availability
function checkProduct($product, $inventory) {
    if (!in_array($product, $inventory)) {
        throw new Exception("Product '$product' not found!");
    }
    return "$product is available.";
}

try {
    echo checkProduct('Laptop', $products) . "<br>"; // exists
    echo checkProduct('Tablet', $products) . "<br>"; // not exists
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>
