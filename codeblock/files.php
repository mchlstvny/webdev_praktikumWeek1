<?php
/* ============================
            FILES
   ============================ */
echo "==== FILES ====<br>";

// Get current directory
$currentDir = __DIR__;
echo "Current directory: $currentDir<br>";

// Path to products.txt
$productFile = $currentDir . '/products.txt';

// Check if file exists
if (file_exists($productFile)) {
    echo "Product file found.<br>";

    // Read entire content
    $productsContent = file_get_contents($productFile);
    echo "<br><b>All Products:</b>";
    // echo "<pre>$productsContent</pre>";

    // Read line by line
    echo "<br><b>Products Line by Line:</b><br>";
    $fileHandle = fopen($productFile, "r");
    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
        if ($line !== false) {
            echo htmlspecialchars($line) . "<br>";
        }
    }
    fclose($fileHandle);
} else {
    echo "Product file not found. Please create products.txt<br>";
}

// ---------- ORDERS TXT ----------
$orderFile = $currentDir . '/orders.txt';
if (file_exists($orderFile)) {
    echo "<br><b>Orders:</b><br>";
    $fileHandle = fopen($orderFile, "r");
    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
        if ($line !== false) {
            echo htmlspecialchars($line) . "<br>";
        }
    }
    fclose($fileHandle);
} else {
    echo "Orders file not found. Please create orders.txt<br>";
}

// ---------- CUSTOMERS CSV ----------
$csvFile = $currentDir . '/customers.csv';
$customers = [
    ['name' => 'John', 'age' => 30, 'membership' => 'Gold'],
    ['name' => 'Alice', 'age' => 25, 'membership' => 'Silver'],
    ['name' => 'Bob', 'age' => 40, 'membership' => 'Regular']
];

// Open CSV for writing
$fileHandle = fopen($csvFile, 'w');

// Write header with escape param
fputcsv($fileHandle, array_keys($customers[0]), ',', '"', "\\");

// Write customer data
foreach ($customers as $customer) {
    fputcsv($fileHandle, $customer, ',', '"', "\\"); 
}
fclose($fileHandle);

echo "Customer data exported to CSV: <b>customers.csv</b><br>";

// ---------- PREVIEW CSV CONTENT ----------
echo "<b>CSV Content Preview:</b><br>";
echo "<pre>";
print_r($customers);
echo "</pre>";
?>
