<?php
/* ============================
        LOOPS & ITERATION
   ============================ */
echo "<b>==== LOOPS & ITERATION ====</b><br>";

// Example product stock
$products = ['Laptop' => 5, 
            'Mouse' => 12, 
            'Phone' => 8, 
            'Keyboard' => 3];

// For loop - iterate through 3 first products
$productKeys = array_keys($products);
for ($i = 0; $i < 3; $i++) {
    echo "Product: " . $productKeys[$i] . ", Stock: " . $products[$productKeys[$i]] . "<br>";
}

// While loop - counting down stock for a sale
$stockLeft = 5;
while ($stockLeft > 0) {
    echo "Stock left: $stockLeft<br>";
    $stockLeft--;
}

// Do-while loop - simulate customer adding items to cart until max reached
$cartCount = 1;
$maxCart = 5;
do {
    echo "Added item $cartCount to your cart<br>";
    $cartCount++;
} while ($cartCount <= $maxCart);

// Foreach loop with break / continue: check wishlist
$wishlist = ['Laptop', 'Tablet', 'Mouse'];
foreach ($wishlist as $item) {
    if ($item === 'Tablet') {
        echo "Tablet is out of stock, skipping...<br>";
        continue; // skip this item
    } elseif ($item === 'Mouse') {
        echo "Reached desired item Mouse, stopping iteration.<br>";
        break; // exit loop
    }
    echo "Checking availability for: $item<br>";
}
?>