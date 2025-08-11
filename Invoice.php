<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "website_database";

// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the ID of the last inserted invoice
$sql = "SELECT inv_id 
        FROM Invoice 
        ORDER BY Created_at DESC 
        LIMIT 1";

$result = $conn->query($sql);
$last_inv_id = 0; // Default value if no invoices are found

if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $last_inv_id = (int)$row['inv_id']; // Ensure the value is treated as an integer
}

// Increment the last invoice ID for the new batch of invoices
$new_inv_id = $last_inv_id + 1;

// Iterate over the cart items and insert them into the Invoice table
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $prod_id = $item['id'];
        $quantity = $item['quantity'];
        $cust_id = $_SESSION['user_id']; // Retrieve the user ID from the session
        $amount = $item['price'] * $item['quantity'];

        // Prepare the SQL query
        $stmt = $conn->prepare("INSERT INTO Invoice (inv_id, Inv_purchasedquantity, Prod_id, Cust_id,Total_amount,Created_at) 
                                VALUES (?, ?, ?, ?,?, NOW())");
        $stmt->bind_param("iiiii", $new_inv_id, $quantity, $prod_id, $cust_id,$amount);

        // Execute the query
        if (!$stmt->execute()) {
            echo "Error inserting invoice: " . $stmt->error;
            header("Location: Cart.php");
        } else {
            echo "Invoice added for product ID: " . $prod_id . "<br>";
       
            header("Location: purchase_invoice.php");
        }

        // Close the statement
        $stmt->close();
    }
} else {
    echo "Cart is empty.";
    header("Location: Cart.php");
}

// Close the connection
$conn->close();
?>
