<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in and is an admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    // If not an admin, redirect to the login page or another appropriate page
    header("Location: Webpage 3.0.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Add Product</title>
    <link rel="stylesheet" type="text/css" href="Styles1.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (optional, for components like modals, dropdowns, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .bigblock {
           
            max-width: 1200px;  /* Adjust container width to fit the forms properly */
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
    
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            margin-bottom: 20px;
            color: #333;
        }
        form {

          
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input, button,select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        select:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #0056b3;
        }

        .custom-button {
            background-color: black;
            color: white;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease; /* Smooth transition for hover effect */
        }

        .custom-button:hover {
            background-color: white;
            color: black;
            border: 2px solid black;
        }

        /* Optional: Style for container */
        .button-container {
            display: flex;
            gap: 10px;
            margin: 20px;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .block
        {
            border: 1px outset ;
            border-radius: 10px;
            margin-left: 6%;
        }
    </style>
</head>
<body>

<div class="container" style="border: 3px;">
		<div class="header-content">

			<div class="row">

				<div class="col-lg-12 col-12">
					
						  <nav class="navbar navbar-expand-lg navbar-light">
						    <div class="container-fluid">
						      <a class="navbar-brand" href="#">
						      	<div class="logo">

								 	<img class="logo-image" src="logo.png">
								 	<img class="logo-name" src="logo-name.png">

								 </div>
							</a>
									<br>

			

						      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						        <span class="navbar-toggler-icon"></span>
						      </button>
						      <div class="collapse navbar-collapse" id="navbarNav">
						        <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
						            <a class="nav-link" href="admin.php">Admin</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" aria-current="page" href="Webpage 3.0.php">Home</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="Store.php">Store</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="About.php">About</a>
						          </li>
                                  <li class="nav-item">
						            <a class="nav-link" href="ContactUs.php">Contact</a>
						          </li>
						        </ul>
						      </div>
						    </div>
						  </nav>

				</div>
			</div>
            </div>
            </div>


            <?php
// Check if 'sent' parameter exists in the URL
if (isset($_GET['added']) && $_GET['added'] === 'true') {
    // Show the success popup
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Product has been added successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['added']) && $_GET['added'] === 'false') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Failed to add the product. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['Updated']) && $_GET['Updated'] === 'true') {
    // Show the success popup
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Product has been Updated successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['Updated']) && $_GET['Updated'] === 'false') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Failed to Update the product. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['deleted']) && $_GET['deleted'] === 'true') {
    // Show the success popup
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Product has been deleted successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['deleted']) && $_GET['deleted'] === 'false') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Failed to add the product. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>
        
<div class="bigblock">
<div class="container">
    <div class="row">
        <div class="col-lg-3 block">
            <h1>Admin Panel - Add Product</h1>
            <form action="add_product.php" method="POST" enctype="multipart/form-data">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" placeholder="Enter Product Name" required>

                <label for="product_price">Product Price:</label>
                <input type="number" id="product_price" name="product_price" placeholder="Enter Product Price" required>

                <label for="product_avaliable">Product Avaliable:</label>
                <input type="number" id="product_avaliable" name="product_avaliable" placeholder="Enter Avaliable Product" required>

                <label for="product_category">Product Category:</label>
                <input type="text" id="product_category" name="product_category" placeholder="Enter Product category" required>

                <label for="product_image">Product Image:</label>
                <input type="file" id="product_image" name="product_image" accept="image/*" required>

                <button type="submit" class="custom-button">Add Product</button>
            </form>
        </div>

        <?php
// Include your database connection
include('db_connection.php');

// Query to fetch all product names and their IDs from the product table
$sql = "SELECT Prod_id, Prod_name FROM product";
$result = $conn->query($sql);
?>

        <div class="col-lg-3 offset-lg-1 block">
            <h1>Admin Panel - Add Product</h1>
            <form action="update_product.php" method="POST" enctype="multipart/form-data">
                <label for="product_id_update">Select Product Name:</label>
                <select id="product_id_update" name="product_id" required>
                <option value="" disabled selected>Choose Product Name</option>
                        <?php
                    // Check if there are products in the result
                    if ($result->num_rows > 0) {
                        // Loop through each product and create an option for each
                        while($row = $result->fetch_assoc()) {
                            $productId = $row['Prod_id'];
                            $productName = $row['Prod_name'];
                            echo "<option value=\"$productId\">$productName</option>";
                        }
                    } else {
                        echo "<option value=\"\">No products found</option>";
                    }
                    ?>
                </select>

                <label for="product_name_update">New Product Name:</label>
                <input type="text" id="product_name_update" name="product_name" placeholder="Enter New Product Name" required>

                <label for="product_price_update">New Product Price:</label>
                <input type="number" id="product_price_update" name="product_price" placeholder="Enter New Product Price" required>

                <label for="product_avaliable_update">New Product Available:</label>
                <input type="number" id="product_avaliable_update" name="product_avaliable" placeholder="Enter New Product Available" required>

                <label for="product_category_update">New Product Category:</label>
                <input type="text" id="product_category_update" name="product_category" placeholder="Enter New Product Category" required>

                <label for="product_image_update">New Product Image:</label>
                <input type="file" id="product_image_update" name="product_image" accept="image/*">

                <button type="submit" class="custom-button">Update Product</button>
            </form>

        </div>


        <?php
// Include your database connection
include('db_connection.php');

// Query to fetch all product names and their IDs from the product table
$sql = "SELECT Prod_id, Prod_name FROM product";
$result = $conn->query($sql);
?>

<div class="col-lg-3 offset-lg-1 block">
    <h1>Admin Panel - Delete Product</h1>
    <form action="delete_product.php" method="POST">
        <label for="product_name_delete">Select Product Name:</label>
        <select id="product_name_delete" name="product_id" required>
            <option value="" disabled selected>Choose Product Name</option>

            <?php
            // Check if there are products in the result
            if ($result->num_rows > 0) {
                // Loop through each product and create an option for each
                while($row = $result->fetch_assoc()) {
                    $productId = $row['Prod_id'];
                    $productName = $row['Prod_name'];
                    echo "<option value=\"$productId\">$productName</option>";
                }
            } else {
                echo "<option value=\"\">No products found</option>";
            }
            ?>

        </select>

        <button type="submit" class="custom-button">Delete Product</button>
    </form>
</div>

<?php
// Close the database connection
$conn->close();
?>


          

        </div>
    </div>
</div>
</div>

</body>
</html>
