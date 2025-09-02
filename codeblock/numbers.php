<?php
/* ============================
            NUMBERS
   ============================ */

echo "<b>==== NUMBERS ====</b><br>";

// Customer's balance
$balance = 100; // starting balance
echo "Customer balance: $$balance <br>";

$balance += 50; // customer adds $50
echo "After top-up, balance: $$balance <br>";

$balance -= 30;
echo "After purchase, balance: $$balance <br>";

// Customer earns reward points
$rewardPoints = 10;
$rewardPoints++;
echo "Reward points after shopping: $rewardPoints <br>";

// Customer redeems 1 reward point
$rewardPoints--;
echo "Reward points after redeeming: $rewardPoints <br>";

// Check if input is numeric (e.g. price input)
$inputPrice = "59.99";
echo "Is '$inputPrice' numeric? " . (is_numeric($inputPrice) ? 'Yes' : 'No') . "<br>";

// Round total price
$totalPrice = 49.80;
echo "Rounded total: " . round($totalPrice) . "<br>"; // 50

// Round with precision (e.g. displaying invoice)
$exactPrice = 123.4567;
echo "Invoice price (2 decimals): " . round($exactPrice, 2) . "<br>"; // 123.46

// Generate random order number
$orderNumber = rand(1000, 9999);
echo "Your order number is: #$orderNumber <br>";
?>