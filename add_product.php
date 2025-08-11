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
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_available = $_POST['product_avaliable'];
    $product_category = $_POST['product_category'];

    // Handle file upload for product_image

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

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                // Image uploaded successfully
                $product_image = $target_file;

                // Prepare SQL statement
                $sql = "INSERT INTO product (Prod_name, Prod_price, Prod_avaliable_quantity, Prod_image, Prod_category) 
                        VALUES (?, ?, ?, ?, ?)";

                // Use prepared statement to prevent SQL injection
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sdiss", $product_name, $product_price, $product_available, $product_image, $product_category);

                // Execute the statement
                if ($stmt->execute()) {
                    header("Location: admin.php?added=true");
                    exit();
                } else {
                    header("Location: admin.php?added=false");
                    exit();
                }

                $stmt->close();
            } else {
                header("Location: admin.php?added=false");
                exit();
            }
        }
    } 

$conn->close();
?>