<?php
session_start();
if (isset($_SESSION['cart'])) {
    echo "<h2>Your Cart:</h2>";
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>Product ID: " . $item . "</li>"; //In a real app, you would fetch product details from the database
    }
    echo "</ul>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>