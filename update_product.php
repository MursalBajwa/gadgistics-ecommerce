<?php
// Database configuration
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "website_database"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $product_id = $_POST['product_id'];  // Product ID is required for updating
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_available = $_POST['product_avaliable'];
    $product_category = $_POST['product_category'];
    
    // Default image variable in case no new image is uploaded
    $product_image = null;

    // Handle file upload for product_image
    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] == 0) {
        // Define the upload directory
        $target_dir = "uploads/"; // Directory to store uploaded images
        $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
        $uploadOk = 1;

        // Check if the file is an image
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if the upload is successful
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                // Image uploaded successfully
                $product_image = $target_file;
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, your file was not uploaded.";
        }
    }

    // Prepare SQL statement to update the product
    if ($product_image !== null) {
        // If a new image is uploaded, update the image as well
        $sql = "UPDATE product 
                SET Prod_name = ?, Prod_price = ?, Prod_avaliable_quantity = ?, Prod_category = ?, Prod_image = ? 
                WHERE Prod_id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdisss", $product_name, $product_price, $product_available, $product_category, $product_image, $product_id);
    } else {
        // If no new image is uploaded, update without changing the image
        echo"image is null";
        $sql = "UPDATE product 
                SET Prod_name = ?, Prod_price = ?, Prod_avaliable_quantity = ?, Prod_category = ? 
                WHERE Prod_id = ?";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdiss", $product_name, $product_price, $product_available, $product_category, $product_id);
    }

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: admin.php?Updated=true");
        exit();
    } else {
        header("Location: admin.php?Updated=false");
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
