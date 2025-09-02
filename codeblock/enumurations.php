<?php
/* ============================
        ENUMERATIONS
   ============================ */
echo "<br>==== ENUMERATIONS ====<br>";

// Basic enum declaration for order status
enum OrderStatus
{
    case Pending;
    case Shipped;
    case Delivered;
    case Cancelled;
}

// Function to print order status
function printOrderStatus(OrderStatus $status)
{
    print("Order Status: " . $status->name . "<br>");
}

// Example usage
printOrderStatus(OrderStatus::Pending);   // Order Status: Pending
printOrderStatus(OrderStatus::Delivered); // Order Status: Delivered

// Enum with values and public function
enum OrderStatusValue : int
{
    case Pending = 0;
    case Shipped = 1;
    case Delivered = 2;
    case Cancelled = 3;

    public function text() : string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Shipped => 'Shipped',
            self::Delivered => 'Delivered',
            self::Cancelled => 'Cancelled',
        };
    }
}

// Function to get status text and value
function getOrderStatus(OrderStatusValue $status)
{
    print("<br>Status: " . $status->text() . "<br>");
    print("Value: " . $status->value . "<br>");
}

// Example usage
getOrderStatus(OrderStatusValue::Shipped);   // Status: Shipped, Value: 1
getOrderStatus(OrderStatusValue::Delivered); // Status: Delivered, Value: 2
?>
