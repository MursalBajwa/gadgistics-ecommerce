<?php
// Include your database connection
include('db_connection.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the product ID from the form
    $productId = $_POST['product_id'];

    // Check if the product ID is not empty
    if (!empty($productId)) {
        // Prepare the SQL query to delete the product from the database by ID
        $sql = "DELETE FROM product WHERE Prod_id = ?";

        // Prepare the statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind the product ID to the prepared statement
            $stmt->bind_param("i", $productId); // 'i' stands for integer

            // Execute the statement
            if ($stmt->execute()) {
                // If the deletion is successful, display a success message
                header("Location: admin.php?deleted=true");
                exit();
            } else {
                // If the deletion fails, display an error message
                header("Location: admin.php?deleted=false");
                exit();
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error preparing the SQL query.";
        }
    } else {
        echo "<script>alert('No product selected.'); window.location.href = 'your_redirect_page.php';</script>";
    }
}

// Close the database connection
$conn->close();
?>
