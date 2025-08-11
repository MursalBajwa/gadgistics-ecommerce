<?php
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
             

             // Initialize the cart if it doesn't exist yet
             if (!isset($_SESSION['cart'])) {
                 $_SESSION['cart'] = [];
             }

             // Handle form submission to add items to the cart
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 // Extract product details from the form
                 $id = $_POST['id'];
                 $name = $_POST['name'];
                 $price = $_POST['price'];
                 $quantity = $_POST['quantity'];

                 // Check if the item is already in the cart
                 $itemFound = false;
                 foreach ($_SESSION['cart'] as &$item) {
                     if ($item['id'] == $id) {
                         // Update the quantity if the item is already in the cart
                         $item['quantity'] += $quantity;
                         $itemFound = true;
                         break;
                     }
                 }

                 // If the item is not in the cart, add it
                 if (!$itemFound) {
                     $_SESSION['cart'][] = [
                         'id' => $id,
                         'name' => $name,
                         'price' => $price,
                         'quantity' => $quantity
                     ];
                 }

             

             }
             
             $_SESSION['is_added'] = true;
             header("Location: Store.php");
                
             
?>