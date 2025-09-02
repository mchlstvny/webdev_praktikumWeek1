<?php
/* ============================
           CONDITIONALS
   ============================ */
echo "<b>==== CONDITIONALS ====</b><br>";

// Customer data
$custName = "John";
$isLoggedIn = true;
$cartItems = 3;
$memberLevel = 'Gold'; // possible values: 'Regular', 'Silver', 'Gold'
$hasDiscountCoupon = true;
$totalPrice = 300.75;

// if-else statements
// Check if user is logged in
if ($isLoggedIn) {
    echo "Welcome back to Tech Store, $custName!<br>";
} else {
    echo "Please log in to continue.<br>";
}

// Check cart items
if ($cartItems > 0) {
    echo "You have $cartItems item(s) in your cart.<br>";
} else {
    echo "Your cart is empty.<br>";
}

// Check total price for shipping discount
echo "Total Price: $$totalPrice<br>";
if ($totalPrice > 1000) {
    echo "You qualify for free shipping!<br>";
} elseif ($totalPrice > 500) {
    echo "Shipping will be discounted 50%!<br>";
} else {
    echo "Standard shipping rates apply.<br>";
}

// Member level and discount coupon
echo "Member Level: $memberLevel<br>";
if ($memberLevel == "Gold") {
    if ($hasDiscountCoupon) {
        echo "Gold member + coupon: You get 30% OFF!<br>";
    } else {
        echo "Gold member: You get 20% OFF!<br>";
    }
} elseif ($memberLevel == "Silver") {
    echo "Silver member: You get 10% OFF!<br>";
} else {
    echo "Regular customer: Sign up to get discounts!<br>";
}

// Ternary operator
$checkoutMessage = ($cartItems > 0) ? "Proceed to checkout." : "Add items to your cart first.";
echo $checkoutMessage . "<br>";
?>