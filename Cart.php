<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" type="text/css" href="Styles1.css">

             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        

         <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="popup" id="cartPopup">
                 <p>Order Placed!</p>
                </div>


<div class="container"> 
  <div class="row"> 
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Cart</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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


              <li class="nav-item">
                <a class="nav-link" href="Cart.php">Cart(<?= $totalQuantity; ?>)</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>


<div class="container mt-3"> 
  <div class="row"> 
    <div class="col-lg-8">

      <!-- HTML Table to Display Cart with Remove Button -->
      <table class="table text-center">
        <thead>
          <tr >
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Unit-Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($cartItems)): ?>
            <?php foreach ($cartItems as $item): ?>
              <tr>
                <td><?= htmlspecialchars($item['id']); ?></td>
                <td><?= htmlspecialchars($item['name']); ?></td>
                <td><?= htmlspecialchars($item['price']); ?></td>
                <td><?= htmlspecialchars($item['quantity']); ?></td>
                <td>
                  <form action="removetocart.php" method="POST">
                    <button type="submit" name="remove_item_id" value="<?= htmlspecialchars($item['id']); ?>" class="btn btn-danger">Remove</button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5">Cart is empty.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>


    </div>

    <?php

      if (session_status() === PHP_SESSION_NONE) {
        session_start();
      }

      // Assuming $_SESSION['cart'] is already assigned and has the cart data
      $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

      $totalAmount = 0;

      foreach($cartItems as $item)
      {
       $totalAmount += $item['price'] * $item['quantity']; 
      }
      $_SESSION['totalAmount'] = $totalAmount;
    ?>

    <div class="col-lg-4">
          <div id="buy">
            <h2>Total Amount:</h2>
            <div class="amount">$<?= $totalAmount; ?></div>
            <form method="post" action="Invoice.php">
              <button type="submit" id = buyBtn class="buy-btn">Buy Now</button>
            </form>
        </div>
    </div>

  </div>
</div>


     
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>


<style>
     
        /* Buy Section Styles */
        #buy {
            background-color: white; /* Dark grey for the box */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.13); /* Subtle shadow */
        }

        /* Heading Styling */
        #buy h2 {
            font-size: 24px;
            margin-left: 0px;
            margin-bottom: 10px;
            color: black; /* White heading */
            font-weight: bold;
            text-align: left;
        }

        /* Amount Styling */
        #buy .amount {
            font-size: 25px;
            font-weight: bold;
            color: #606062; /* Green to highlight the amount */
            margin-bottom: 20px;
        }

        /* Buy Now Button */
        #buy .buy-btn {
                text-decoration: none;
            
            font-size: 120%;
            padding: 8px;
            color: white;
            border: 3px solid white;
            transition-property: all;
            transition-duration: 1s;
            box-sizing: border-box;
            border-radius: 10px;
            background-color: black;
        }

        #buy .buy-btn:hover {
          color: black;
          background-color: white;
          border : 3px solid black;
        }

        .popup {
    display: none; /* Hidden by default */
    position: fixed;
    top: 2%;
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







