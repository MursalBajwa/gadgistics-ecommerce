<!-- HTML Table to Display Cart -->
<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Assuming $_SESSION['cart'] is already assigned and has the cart data
$cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// Remove item from cart
if (isset($_POST['remove_item_id'])) {
    $itemIdToRemove = $_POST['remove_item_id'];

    // Remove item with matching ID from cart
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $itemIdToRemove) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
    // Re-index the array after removal
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    header("Location: Cart.php");
}
?>