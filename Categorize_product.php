<?php
       // Start the session at the very top of your file
                session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>

             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        

         <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="popup" id="cartPopup">
                 <p>Item added to cart!</p>
                </div>

<div class="container"> 
  <div class="row"> 
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
									if (session_status() === PHP_SESSION_NONE) {
										session_start();
										}

									if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
										echo '<li class="nav-item">
												<a class="nav-link" aria-current="page" href="admin.php">Admin</a>
											</li>';
									}
									?>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="Webpage 3.0.php">Home</a>
              </li>
              <li class="nav-item">
						            <a class="nav-link" href="Store.php">Store</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="About.php">About</a>
						          </li>
              <!-- Cart button placed after the Home button -->

             
              <?php



                // Start the session if not already started
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                // Assuming $_SESSION['cart'] is already assigned and has the cart data
                $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

                // Initialize the total quantity variable
                $totalQuantity = 0;

                // Loop through the cart items to sum up the quantity
                foreach ($cartItems as $item) {
                    $totalQuantity += $item['quantity'];  // Add the quantity of each item
                }
                ?>

              <?php
              if (session_status() === PHP_SESSION_NONE) {
                  session_start();
              }

              if ((isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == false) || !isset($_SESSION['is_admin'])) {
                  echo '<li class="nav-item">
                          <a class="nav-link" href="Cart.php">Cart(' . $totalQuantity . ')</a>
                        </li>';
              }
              ?>


            </ul>
            <!-- Right-aligned search form -->

          </div>
        </div>
      </nav>
    </div>
  </div>
</div>



<?php
// Include your database connection
include('db_connection.php');

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if category is passed in the URL, otherwise set it to null
$category = isset($_GET['category']) ? $_GET['category'] : null;

// Query to fetch products based on the category if specified
if ($category) {
    $sql = "SELECT * FROM product WHERE Prod_category = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $category); // Bind the category parameter
} else {
    // If no category, fetch all products
    $sql = "SELECT * FROM product";
    $stmt = $conn->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container mt-4">
    <div class="row" id="cardContainer">
        <?php
        // Check if there are products in the result
        if ($result->num_rows > 0) {
            // Loop through each product
            while($row = $result->fetch_assoc()) {
                // Extract product data
                $productId = $row['Prod_id'];
                $productName = $row['Prod_name'];
                $productPrice = $row['Prod_price'];
                $productImage = $row['Prod_image'];
                $productQuantity = $row['Prod_avaliable_quantity'];
                $productCategory = $row['Prod_category'];
        ?>
        
        <div class="col-lg-3">
            <form method="post" action="addtocart.php">
                <div class="card">
                    <img src="<?= $productImage ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $productName ?></h5>
                        <p class="card-text">Price: $<?= $productPrice ?></p>

                        <div class="d-flex justify-content-center mt-3 mb-3">
                            <div class="input-group input-group-sm" style="max-width: 200px;">
                                <button class="btn btn-outline-secondary btn-sm" type="button" onclick="document.getElementById('quantity<?= $productId ?>').stepDown()">-</button>
                                <input type="number" id="quantity<?= $productId ?>" class="form-control text-center" value="1" min="1" name="quantity">
                                <button class="btn btn-outline-secondary btn-sm" type="button" onclick="document.getElementById('quantity<?= $productId ?>').stepUp()">+</button>
                            </div>
                        </div>
                        <button type="submit" class="btn text-white bg-black border-0 btn-info addtocartBtn">Add To Cart</button>
                        <input type="hidden" name="id" value="<?= $productId ?>">
                        <input type="hidden" name="name" value="<?= $productName ?>">
                        <input type="hidden" name="price" value="<?= $productPrice ?>">
                        <input type="hidden" name="category" value="<?= $productCategory ?>"> <!-- Hidden category field -->
                    </div>
                </div>
            </form>
        </div>

        <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</div>

<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>


    </div>
</div>


    


    </div>
  </div>
</nav>
<?php
if (session_status() === PHP_SESSION_NONE) {
									    session_start();
}
if (isset($_SESSION['is_added']) && $_SESSION['is_added'] === true) {
    echo "<script>const addedSuccess = true;</script>";
    unset($_SESSION['is_added']); // Clear session variable after use
} else {
    echo "<script>const addedSuccess = false;</script>";
}
?>



           
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</body>
</html>


<style>
  .custom-btn {
    color: black; 
    background-color: white; 
    border: 2px solid black;
  }
  .custom-btn:hover {
    color: white; 
    background-color: black;
  }

  .popup {
    display: none; /* Hidden by default */
    position: fixed;
    top: 10%;
    right: 2%;
    background-color: black;
    color: white;
    padding: 2px 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: center;
    z-index: 1;
}

</style>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".searchbtn").on("click", function (event) {
            event.preventDefault(); // Prevent form submission

            const value = $("#searchInput").val().toLowerCase();
            if (value === "") {
                // Show all cards if input is empty
                $("#cardContainer .card").show();
            } else {
                // Filter cards based on input value
                $("#cardContainer .card").filter(function () {
                    const title = $(this).find(".card-title").text().toLowerCase();
                    $(this).toggle(title.includes(value));
                });
            }
        });


        if(addedSuccess)
        {
            $("#cartPopup").fadeIn(500, function () {
        // Keep the popup visible for 2 seconds before fading out
        setTimeout(() => {
            $("#cartPopup").fadeOut(500);
        }, 700); // Popup stays visible for 2 seconds
    });
        }


    });
</script>




