<?php
/* ============================
             ARRAYS
   ============================ */

echo "<b>==== ARRAYS ====</b><br>";

// Array declaration with different types
$productExample = ['Laptop', 200.50, true, ['stock' => 5, 'sold' => 2]];

// Array of product names
$products = ['Laptop', 'Mouse', 'Phone', 'Keyboard'];

// Access a specific product
echo $products[1] . "<br>"; // Mouse

// Access stock info from nested array
echo "Stock of nested product: " . $productExample[3]['stock'] . "<br>"; // 5

// Add a new product
$products[] = 'Monitor';
echo "<pre>";
print_r($products); // ['Laptop', 'Mouse', 'Phone', 'Keyboard', 'Monitor']
echo "</pre>";

// Merge arrays (new arrivals)
$newProducts = ['Tablet', 'Headphones'];
$allProducts = [...$products, ...$newProducts];
echo "<pre>";
print_r($allProducts);
echo "</pre>";

// Remove a product
unset($products[2]); // removes 'Phone'
echo "<pre>";
print_r($products);
echo "</pre>";

// Convert array to string for display
echo "Products as string: " . implode(', ', $products) . "<br>";

// Convert string to array (e.g., CSV import)
$text = "Laptop,Mouse,Keyboard,Monitor";
$productArray = explode(',', $text);
echo "<pre>";
print_r($productArray);
echo "</pre>";

// Loop through products
foreach($products as $product) {
    echo "Available product: $product<br>";
}

// Count total products
echo "Total products: " . count($products) . "<br><br>";

// Associative array: customer info
$customer = ['name' => 'John', 'age' => 30, 'membership' => 'Gold'];

// Add new info
$customer['cartItems'] = 3;

// Loop associative array
foreach($customer as $key => $value) {
    echo "$key: $value<br>";
}

// Check if a key exists
if(array_key_exists('membership', $customer)) {
    echo "Customer membership exists.<br><br>";
}

// Get all keys and values
echo "<pre>";
print_r(array_keys($customer));   // ['name', 'age', 'membership', 'cartItems']
print_r(array_values($customer)); // ['John', 30, 'Gold', 3]
echo "</pre>";

// Filter products with "Laptop"
$laptops = array_filter($allProducts, fn($item) => str_contains($item, 'Laptop'));
echo "<pre>";
print_r($laptops);
echo "</pre>";

// Map products to uppercase
$upperProducts = array_map(fn($item) => strtoupper($item), $allProducts);
echo "<pre>";
print_r($upperProducts);
echo "</pre>";

// Search for a product by name in associative array
$inventory = [
    ['id' => '100', 'name' => 'Laptop'],
    ['id' => '200', 'name' => 'Mouse'],
    ['id' => '300', 'name' => 'Keyboard'],
];
$foundKey = array_search('Keyboard', array_column($inventory, 'name'));
echo "Keyboard found at index: $foundKey<br>";
?>
